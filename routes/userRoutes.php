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
Route::get('/user', function () {
    return view('UserViews/Home/home');
});
Route::get('/product-details', function () {
    return view('UserViews/Product/product-details');
});
Route::get('/banned_users', function () {
    return view('AdminViews.ManageUsers.bannedUsers');
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
Route::get('/removed_product', function () {
    return view('AdminViews.Product.removed_product');
});
Route::get('/products_list', function () {
    return view('AdminViews.Product.products_list');
});
Route::get('/boost_products', function () {
    return view('AdminViews.Product.Ads.boost_products');
});
Route::get('/current_ads', function () {
    return view('AdminViews.Product.Ads.current_ads');
});
Route::get('/add_category', function () {
    return view('AdminViews.Product.manage_categories.add_category');
});
Route::get('/category_list', function () {
    return view('AdminViews.Product.manage_categories.category_list');
});
Route::get('/add_brands', function () {
    return view('AdminViews.Product.manage_brands.add_brands');
});
Route::get('/brands_list', function () {
    return view('AdminViews.Product.manage_brands.brands_list');
});
Route::get('/add_inspection', function () {
    return view('AdminViews.Product.manage_inspection.add_inspection');
});
Route::get('/inspection_report', function () {
    return view('AdminViews.Product.manage_inspection.inspection_report');
});
Route::get('/product_report', function () {
    return view('AdminViews.Product.product_report');
});
Route::get('/txn_ledger', function () {
    return view('AdminViews.Finance.txn_ledger');
});
Route::get('/wallets', function () {
    return view('AdminViews.Finance.wallets');
});
Route::get('/withdraw_requests', function () {
    return view('AdminViews.Finance.withdraw_requests');
});
Route::get('/charges_and_discounts', function () {
    return view('AdminViews.Finance.charges_and_discounts');
});
Route::get('/withdraw_history', function () {
    return view('AdminViews.Finance.withdraw_history');
});
Route::get('/pending_refunds', function () {
    return view('AdminViews.Finance.pending_refunds');
});
Route::get('/approved_refunds', function () {
    return view('AdminViews.Finance.approved_refunds');
});
Route::get('/deposits', function () {
    return view('AdminViews.Finance.deposits');
});
Route::get('/add_return', function () {
    return view('AdminViews.Returns.add_return');
});

Route::get('/pending_returns', function () {
    return view('AdminViews.Returns.pending_returns');
});
Route::get('/completed_returns', function () {
    return view('AdminViews.Returns.completed_returns');
});
Route::get('/returns_report', function () {
    return view('AdminViews.Returns.returns_report');
});
Route::get('/add_role', function () {
    return view('AdminViews.Roles.add_role');
});
Route::get('/roles_list', function () {
    return view('AdminViews.Roles.roles_list');
});
Route::get('/assign_roles', function () {
    return view('AdminViews.Roles.assign_roles');
});
Route::get('/pending_sales', function () {
    return view('AdminViews.Sales.pending_sales');
});
Route::get('/failed_sales', function () {
    return view('AdminViews.Sales.failed_sales');
});
Route::get('/completed_sales', function () {
    return view('AdminViews.Sales.completed_sales');
});
Route::get('/sales_report', function () {
    return view('AdminViews.Sales.sales_report');
});