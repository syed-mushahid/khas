<?php

namespace App\Http\Controllers\AdminControllers\Registration;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\NewAdminAccount;

class Login extends Controller
{

    public function login()
    {
        return view('AdminViews.Registration.login');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // If successful, redirect to the admin dashboard or intended page
            return redirect()->intended(route('dashboard.view'));
        } else {
            // If unsuccessful, redirect back with an error message
            return redirect()->back()->withInput($request->only('email'))->withErrors(['error' => 'Invalid email or password']);
        }
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'phone' => 'required|string|min:10|max:15',
            'role' => 'required|string|max:255',
        ]);

        // Generate a random 8-character password
        $password = Str::random(8);

        // Create a new admin account
        $admin = new Admin([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'role' => $request->input('role'),
            'password' => Hash::make($password),
        ]);

        // Save the admin account to the database
        $admin->save();

        // Send an email to the admin with registration details, login page link, and generated password
        $mailData = [
            'admin' => $admin,
            'password' => $password,
        ];

        Mail::to($request->input('email'))->send(new NewAdminAccount($mailData));

        // Redirect to the desired location (e.g., admin list) with a success message
        return redirect()->route('admin.list')->with('success', 'Admin account created successfully and an email has been sent with the login details!');
    }

    public function logout()
{

    Auth::guard('admin')->logout();

    return redirect('/admin/login');
}

}
