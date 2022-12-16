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