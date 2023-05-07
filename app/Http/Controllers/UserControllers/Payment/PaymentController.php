<?php

namespace App\Http\Controllers\UserControllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Token is created using Stripe Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $request->input('stripeToken');

        // Create the charge
        $charge = Charge::create([
            'amount' => 99999,
            'currency' => 'PKR',
            'description' => 'Example charge',
            'source' => $token,
        ]);

        // Handle the result of the charge (e.g., save the order in the database, display a success message, etc.)

        return redirect()->back()->with('success', 'Payment successful!');
    }

}
