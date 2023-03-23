<?php

namespace App\Http\Controllers\UserControllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class Login extends Controller
{
    public function login()
    {

        return view('UserViews.Registration.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            // Check if the user's email is verified
            if (!empty(Auth::user()->email_verified_at)) {
                // Email is verified, redirect to the dashboard
                return redirect()->intended('dashboard')->with('global_status', 'Welcome Back ' . Auth::user()->first_name);
            } else {
                // Email is not verified, log the user out
                Auth::logout();

                $this->sendEmailVerificationMail($request->email);
                return redirect()->route('verification.send')->with('error', 'Your email address is not verified. A new verification link has been sent to your email address.');
            }
        } else {
            // Authentication failed, redirect back with an error message
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'error' => 'Invalid email or password.',
            ]);
        }
    }
}
