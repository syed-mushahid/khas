<?php

use App\Http\Controllers\AdminControllers\Dashboard\Dashboard;
use App\Http\Controllers\AdminControllers\ManageUsers\Users;
use App\Http\Controllers\AdminControllers\Registration\Login;
use App\Http\Controllers\AdminControllers\Registration\Settings;
use Illuminate\Support\Facades\Route;

Route::controller(Login::class)->group(function () {
    Route::get('admin/logout', 'logout')->name('admin.logout');
});
Route::middleware('redirect_if_admin_authenticated')
    ->group(function () {

        Route::controller(Login::class)->group(function () {
            // Route::get('/profile', );
            // Route::get('/wishlist', );
            Route::get('admin', 'login')->name('amdin');
            Route::get('admin/login', 'login')->name('admin.login.view');
            Route::POST('admin/login', 'doLogin')->name('admin.login');
            //  Route::POST('admin/add_admin', 'store')->name('admin.create');
        });
    });
Route::middleware('admin_auth')
    ->prefix('admin')
    ->group(function () {
        Route::controller(Login::class)->group(function () {

             Route::POST('admin/add_admin', 'store')->name('admin.create');
        });
        Route::controller(Settings::class)->group(function () {

            Route::get('/profile_settings', 'settings')->name('admin.settings');
            Route::post('/profile_settings', 'updateAccount')->name('admin.settings.update');
            Route::post('/update_password', 'updatePassword')->name('admin.settings.update.password');

        });
        Route::controller(Dashboard::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard.view');
        });
        Route::controller(Users::class)->group(function () {
              Route::get('/users_list', 'userList')->name('users.list');
              Route::get('/users_report', 'usersReport')->name('users.report');
              Route::put('/update_user/{id}', 'updateUser')->name('users.update');
              Route::POST('/reset_user_password/{id}', 'sendPasswordResetLink')->name('users.password');
        });
    });
