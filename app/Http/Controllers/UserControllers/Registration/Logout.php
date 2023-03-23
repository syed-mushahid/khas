<?php

namespace App\Http\Controllers\UserControllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logout extends Controller
{
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
