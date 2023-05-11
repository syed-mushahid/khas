<?php

namespace App\Http\Controllers\UserControllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Phone;

class Home extends Controller
{
    public function index()
    {

        $phones = Phone::orderBy('status', 'asc')->latest()->paginate(10);
        return view('UserViews.Home.home', compact('phones'));


    }
}
