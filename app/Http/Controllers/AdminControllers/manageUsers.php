<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class manageUsers extends Controller
{
    public function  addUser()
    {
        return view('AdminViews.manageUsers.addUsers');
    }
    
    public function usersList(){
        return view('AdminViews.manageUsers.userList');

    }
    public function banedUsers(){
        return view('AdminViews.manageUsers.banedUsers');

    }
}
