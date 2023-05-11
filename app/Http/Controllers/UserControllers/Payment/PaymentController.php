<?php

namespace App\Http\Controllers\UserControllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserControllers\Purchase\CheckoutController;
use App\Mail\NewOrder;
use App\Mail\OrderConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function charge(Request $request)
    {
        $request->validate([
            'recivers_name' => 'required|string|max:255',
            'recivers_email' => 'required|email',
            'recivers_phone' => 'required|string|max:20',
            'recivers_address' => 'required|string|max:255',
            'recivers_city' => 'required|string|max:255',
            'recivers_zip_code' => 'required|string|max:10',
            // 'delivery_option' => 'required|string|max:255',
        ]);

        $checkoutController = new CheckoutController();
        $checkout = $checkoutController->saveCheckout($request);
        if (!$checkout) {
            return redirect()->back()->with('error', 'Unable to Process the checkout.');
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $token = $request->input('stripeToken');

        // Create a customer in Stripe
        $customer = \Stripe\Customer::create([
            'name' => Auth::user()->first_name." ".Auth::user()->last_name,
            'email' => Auth::user()->email,
            'source' => $token,
        ]);

// Create the charge with the customer ID
        $charge = Charge::create([
            'customer' => $customer->id,
            'amount' => $checkout->total_price * 100,
            'currency' => 'PKR',
            'description' => 'Example charge',
        ]);

        // Handle the result of the charge
        if ($charge) {

            $checkout->stripe_transaction_id = $charge->id;
            $checkout->save();

            Mail::to($checkout->recivers_email)->send(new OrderConfirmation($checkout));

            // Get all items from the cart
            $user = auth()->user();
            $cartItems = $user->cartItems;

            foreach ($cartItems as $item) {
                // Get the phone's user email
                $phone = $item->phones;
                $phoneUser = $phone->user;
                $email = $phoneUser->email;

                // Send the NewOrder mail to the seller
                Mail::to($email)->send(new NewOrder($checkout, $phone, $phoneUser));
                $phone->status = "Sold";
                $phone->save();
            }
            //Make the Cart Empty
            foreach ($cartItems as $item) {
                $item->delete();
            }
            return redirect()->route('thankyou')->with('success', 'Payment successful!');
        }
        return redirect()->back()->with('error', 'Payment unsuccessful!');
    }

}
