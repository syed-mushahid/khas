<?php

namespace App\Http\Controllers\AdminControllers\Roles;

use App\Http\Controllers\Controller;
use App\Mail\NewAdminAccount;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Symfony\Component\Mailer\Exception\TransportException;

class Roles extends Controller
{

    public function addAdmin()
    {
        return view('AdminViews.Roles.assign_roles');
    }

    public function addRole()
    {
        return view('AdminViews.Roles.add_role');
    }

    public function roleList()
    {
        $admins = Admin::all();
        return view('AdminViews.Roles.roles_list', compact('admins'));
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

        try {

            Mail::to($request->input('email'))->send(new NewAdminAccount($mailData));
        } catch (TransportException $e) {

            $admin = Admin::findOrFail($admin->id);
            $admin->delete();
            return redirect()->back()->withErrors([
                'error' => 'Unable To Send Email.Make Sure the Email Exist.',
            ]);
            die();
        }
        // Redirect to the desired location (e.g., admin list) with a success message
        return redirect()->route('admin.list')->with('admin_status', 'Admin account created successfully and an email has been sent with the login details!');
    }



}
