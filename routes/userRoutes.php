<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers\Registration;
use App\Http\Controllers\UserControllers\Purchase;
use App\Http\Controllers\AdminControllers\Dashboard;
use App\Http\Controllers\AdminControllers\Login;
use App\Http\Controllers\AdminControllers\manageUsers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(Registration::class)->group(function(){

Route::get('/login','login');
Route::get('/signup','signup');
Route::get('/forgot-password','forgot_password');
Route::get('/email-verification','email_verification');

});

Route::controller(Purchase::class)->group(function(){

Route::get('/cart','cart');
Route::get('/checkout','checkout');


////////Admin Routes///////////
Route::get('/admin_dashboard', [Dashboard::class,'index'])->name('admin_dashboard');
Route::get('/admin/login', [Login::class,'index'])->name('admin/login');
Route::get('/admin/add_user', [manageUsers::class,'addUser'])->name('admin/addUser');
Route::get('/admin/users_list', [manageUsers::class,'UsersList'])->name('admin/usersList');
});

Route::get('/sales_list', function () {
    return view('AdminViews.Sales.salesList');
});