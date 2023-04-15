<?php

use App\Http\Controllers\AdminControllers\Dashboard;
use App\Http\Controllers\AdminControllers\manageUsers;
use App\Http\Controllers\UserControllers\Profile\Settings;
use App\Http\Controllers\UserControllers\Purchase;
use App\Http\Controllers\UserControllers\Registration\ForgotPassword;
use App\Http\Controllers\UserControllers\Registration\GoogleLogin;
use App\Http\Controllers\UserControllers\Registration\Login;
use App\Http\Controllers\UserControllers\Registration\Logout;
use App\Http\Controllers\UserControllers\Registration\Singup;
use App\Http\Controllers\UserControllers\Registration\VerifyEmail;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('UserViews/Home/home');
});
Route::get('/product-details', function () {
    return view('UserViews/Product/product-details');
});
Route::get('/add-product', function () {
    return view('UserViews/Product/addproduct');
});

Route::get('/compare', function () {
    return view('UserViews/Compare/compare');
});
Route::get('/wallet', function () {
    return view('UserViews/Wallet/wallet');
});
Route::get('/support', function () {
    return view('UserViews/Support/support');
});

Route::get('/manage-products', function () {
    return view('UserViews/Product/manage-products');
});
Route::get('/dashboard', function () {
    return view('UserViews/Dashboard/dashboard');
});
Route::get('/purchases', function () {
    return view('UserViews/Purchase/purchases');
});
Route::get('/sales', function () {
    return view('UserViews/Sales/sales');
});

Route::middleware('auth')->group(function () {

    Route::controller(Settings::class)->group(function () {
        // Route::get('/profile', );
        // Route::get('/wishlist', );
        Route::get('/profile_settings', 'showProfileSettings')->name('profile_settings.show');
        Route::POST('/profile_settings', 'updateInfo')->name('profile_settings.update');
        Route::POST('/update_address', 'updateAddress')->name('profile_settings.address');
    });
});

Route::middleware('prevent-login')->group(function () {

    Route::controller(Singup::class)->group(function () {
        Route::get('/signup', 'signup');
        Route::post('/signup', 'store');
    });
    Route::controller(Login::class)->group(function () {

        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'dologin');

    });
    Route::controller(GoogleLogin::class)->group(function () {

        Route::get('login/google', 'googleLogin')->name('login.google');
        Route::get('login/google/callback', 'googleLoginCallBack')->name('login.googleCallback');

    });

    Route::controller(ForgotPassword::class)->group(function () {
        Route::get('/forgot_password', 'forgot_password')->name('password.forgot');
        Route::POST('/forgot_password', 'sendPasswordResetLinkEmail')->name('password.send');
        Route::POST('/set_password', 'setPassword')->name('password.reset');
        Route::get('/reset_password', 'resetPassword')->name('password.set');
    });
    Route::controller(VerifyEmail::class)->group(function () {
        Route::post('/verify_email', 'verifyEmail');
        Route::get('/verify_email', 'verifyEmail');
        Route::get('/email_verification', 'email_verification')->name('verification.send');
        Route::get('/resend-email', 'resendVerificationCode');
    });

});
Route::controller(Logout::class)->group(function () {
    Route::get('/logout', 'logout')->name('logout');
});
Route::controller(Purchase::class)->group(function () {

    Route::get('/cart', 'cart');
    Route::get('/checkout', 'checkout');

////////Admin Routes///////////
    Route::get('/admin_dashboard', [Dashboard::class, 'index'])->name('admin_dashboard');
    Route::get('/admin/login', [Login::class, 'index'])->name('admin/login');
    Route::get('/admin/add_user', [manageUsers::class, 'addUser'])->name('admin/addUser');
    // Route::get('/admin/users_list', [manageUsers::class, 'UsersList'])->name('admin/usersList');
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
Route::get('/add_employee', function () {
    return view('AdminViews.HR management.Manage Employees.add_employee');
});
Route::get('/employee_list', function () {
    return view('AdminViews.HR management.Manage Employees.employee_list');
});
Route::get('/add_designation', function () {
    return view('AdminViews.HR management.Manage Employees.add_designation');
});
Route::get('/designation_list', function () {
    return view('AdminViews.HR management.Manage Employees.designation_list');
});
Route::get('/add_attendance', function () {
    return view('AdminViews.HR management.Attendance.add_attendance');
});
Route::get('/manage_attendance', function () {
    return view('AdminViews.HR management.Attendance.manage_attendance');
});
Route::get('/absents', function () {
    return view('AdminViews.HR management.Attendance.absents');
});
Route::get('/on_leave', function () {
    return view('AdminViews.HR management.Attendance.on_leave');
});
Route::get('/issue_leave', function () {
    return view('AdminViews.HR management.Attendance.issue_leave');
});
Route::get('/event_holidays', function () {
    return view('AdminViews.HR management.Attendance.event_holidays');
});
Route::get('/attendance_report', function () {
    return view('AdminViews.HR management.Attendance.attendance_report');
});
Route::get('/salary_settings', function () {
    return view('AdminViews.HR management.Salary.salary_settings');
});
Route::get('/salary_list', function () {
    return view('AdminViews.HR management.Salary.salary_list');
});
Route::get('/benifits_and_deductions', function () {
    return view('AdminViews.HR management.Salary.benifits_and_deductions');
});
Route::get('/generate_payroll', function () {
    return view('AdminViews.HR management.Salary.generate_payroll');
});
Route::get('/pay_salary', function () {
    return view('AdminViews.HR management.Salary.pay_salary');
});
Route::get('/salary_history', function () {
    return view('AdminViews.HR management.Salary.salary_history');
});
Route::get('/salary_report', function () {
    return view('AdminViews.HR management.Salary.salary_report');
});

/////////Rider Routes//////////////
Route::get('/rider-dashboard', function () {
    return view('RiderViews/Dashboard/dashboard');
});
Route::get('/rider-wallet', function () {
    return view('RiderViews/Wallet/wallet');
});
Route::get('/rider-support', function () {
    return view('RiderViews/Support/support');
});
Route::get('/orders-hisory', function () {
    return view('RiderViews/Orders/orders');
});
Route::get('/pending-orders', function () {
    return view('RiderViews/Orders/pending_orders');
});
Route::get('/new-orders', function () {
    return view('RiderViews/Orders/new-orders');
});
