<?php

namespace App\Http\Controllers\UserControllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserControllers\Registration\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;

class Singup extends Controller
{
    public function signup()
    {

        return view('UserViews.Registration.signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits_between:10,15|unique:users,phone',
            'password' => 'required|min:8|confirmed',
        ]);
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Send the email with the verification code

        $verifyEmail = new VerifyEmail();
        $verifyEmail->sendEmailVerificationMail($user->email);
        // Redirect to the email verification page
        return redirect()->route('verification.send')->with('status', 'We have sent a verification code to your email address. Please enter it below to verify your account.');
    }

}
