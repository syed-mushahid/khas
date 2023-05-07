<?php

namespace App\Http\Controllers\UserControllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Phone;

class Home extends Controller
{
    public function index()
    {

        $phones = Phone::latest()->take(10)->get();
        return view('UserViews.Home.home', compact('phones'));

    }
}
