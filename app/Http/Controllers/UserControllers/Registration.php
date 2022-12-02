<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Registration extends Controller
{
    public function login(){

    return view('UserViews.Registration.login');
    }
    public function signup(){

    return view('UserViews.Registration.signup');
    }
    public function email_verification(){

        return view('UserViews.Registration.email_verification');
    }
    public function forgot_password(){

        return view('UserViews.Registration.forgot_password');
    }
}
