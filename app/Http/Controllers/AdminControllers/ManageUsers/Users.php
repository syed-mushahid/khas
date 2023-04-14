<?php

namespace App\Http\Controllers\AdminControllers\ManageUsers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class Users extends Controller
{
    public function userList()
{
    // Fetch users whose banned value is false
    $users = User::where('banned', false)->get();

    // Pass the users data to the view
    return view('AdminViews.ManageUsers.userList', ['users' => $users]);
}
}
