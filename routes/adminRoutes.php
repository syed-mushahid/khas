<?php

use App\Http\Controllers\AdminControllers\Dashboard\Dashboard;
use App\Http\Controllers\AdminControllers\ManageUsers\Users;
use App\Http\Controllers\AdminControllers\Modules\ModulesContorller;
use App\Http\Controllers\AdminControllers\Registration\Login;
use App\Http\Controllers\AdminControllers\Registration\Settings;
use App\Http\Controllers\AdminControllers\Roles\Roles;
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

        });

        Route::controller(Dashboard::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard.view');
        });
        Route::controller(Users::class)->group(function () {
              Route::get('/users_list', 'userList')->name('users.list');
              Route::get('/get_users_list', 'getUsers')->name('users.getall');
              Route::get('/get_single_user_data/{id}', 'getUserData')->name('users.getone');
              Route::get('/add_user', 'addUser')->name('users.add');
              Route::POST('/add_new_user', 'createUser')->name('users.create');
              Route::get('/users_report', 'usersReport')->name('users.report');
              Route::put('/update_user/{id}', 'updateUser')->name('users.update');
              Route::POST('/reset_user_password/{id}', 'sendPasswordResetLink')->name('users.password');
        });

        Route::controller(Settings::class)->group(function () {

            Route::get('/profile_settings', 'settings')->name('admin.settings');
            Route::post('/profile_settings', 'updateAccount')->name('admin.settings.update');
            Route::post('/update_password', 'updatePassword')->name('admin.settings.update.password');

        });
        Route::controller(Roles::class)->group(function(){
            Route::GET('/add_admin', 'addAdmin')->name('admin.add');
            Route::POST('/create_admin', 'store')->name('admin.create');
            Route::GET('/admin_list', 'adminList')->name('admin.list');
            Route::GET('/add_role', 'addRole')->name('role.add');
            Route::GET('/role_list', 'roleList')->name('role.list');
            Route::GET('/add_module/{id?}', 'addModules')->name('module.add');
            Route::GET('/modules_list', 'modulesList')->name('module.list');
            Route::PUT('/update_module/{id}', 'updateModule')->name('module.update');
            Route::GET('/delete_module/{id}', 'deleteModule')->name('module.delete');
            Route::POST('/create_module', 'createModules')->name('module.create');

        });
        Route::controller(ModulesContorller::class)->group(function(){
            Route::GET('/add_module/{id?}', 'addModules')->name('module.add');
            Route::GET('/modules_list', 'modulesList')->name('module.list');
            Route::PUT('/update_module/{id}', 'updateModule')->name('module.update');
            Route::GET('/delete_module/{id}', 'deleteModule')->name('module.delete');
            Route::POST('/create_module', 'createModules')->name('module.create');

        });
    });
