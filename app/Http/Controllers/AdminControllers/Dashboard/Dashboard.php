<?php

namespace App\Http\Controllers\AdminControllers\Dashboard;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function dashboard()
    {
        return view('AdminViews.Dashboard.index');
    }
}
