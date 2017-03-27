<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// Index Route.
Route::get('/', function () {
    return view('welcome');
});
// Registration Page Route (app/views/registration.blade.php).
Route::get('registration', function() {
    return view('registration');
});
// User Profile route.
Route::get('profiles/user-profile', 'UserController@profile');
Route::post('user-profile', 'UserController@avatarUpdate');
// Administrative User Dashboard route.
Route::resource('crud','CrudController');
//Route::get ( '/crud/index', 'CrudController@show' );
Route::post ( '/crud/editRequest', 'CrudController@editRequest' );
Route::post ( '/crud/addRequest', 'CrudController@addRequest' );
Route::post ( '/crud/deleteRequest', 'CrudController@deleteRequest' );
//Route::get('profiles/admin-add-user', 'CrudController@index');
//Route::post('admin-add-user', 'UserController@store');
// Bootstrap Test Route.
Route::get('bootstrap', function () {
    return view('firstbootstrap');
});
// Authentication Routes
Auth::routes();
// RERA Dashboard Home Wheelchair Requests Routing.
Route::get('findPatientName', 'HomeController@findPatientName'); // Route to controller that handles SELECT tag #2
Route::get('findRoom', 'HomeController@findRoom'); // Route to controller that handles SELECT tag #3
Route::get('findGender', 'HomeController@findGender'); // Route to controller that handles SELECT tag #4
Route::get('findDiagnosis', 'HomeController@findDiagnosis'); // Route to controller that handles SELECT tag #5
Route::get('findTherapistNames', 'HomeController@findTherapistNames'); // Route to controller that handles SELECT tag #7
Route::get('findInpatientWcModels', 'HomeController@findInpatientWcModels'); // Route to controller that handles SELECT tag #9
Route::get('findInpatientWcBrands', 'HomeController@findInpatientWcBrands'); // Route to controller that handles SELECT tag #10
// User Wheelchair Requests Form Routing Group.
Route::resource('wcr', 'WcRController');
// Create Wheelchair Requests in the Group.
Route::get('wcr.create', 'WcRController@index')->name('wcr.index');
Route::post('/wheelchairs', function () {
    if (Request::ajax()) {
        return Response::json(Request::all());
    }
});
//Route::post('/wheelchairs', 'WcRController@store')->name('wcr.store');
// Group Routing within the Auth.
//Route::group(['middleware' => ['auth']], function() {
// all routes here will require the user to be logged in.
    //Route::get('user-profile/{slug}', [
        //'uses' => 'ProfilesController@index']);
//});
// User Login Form Routing.
Route::get('user-login', 'Auth\LoginController@showLoginForm');
Route::post('user-login', 'Auth\LoginController@login');
// User Register Form Routing.
Route::get('user-register', 'Auth\RegisterController@showRegistrationForm');
Route::post('user-register', 'Auth\RegisterController@register');
// User Logout Form Routing.
Route::post('user-logout', 'Auth\LoginController@logout');
// User Passwords Form Routing.
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// RERA Dashboard User Landing Page Routing.
Route::get('home', 'HomeController@index');
// Auth Group Admin.
Route::prefix('admin')->group(function () {
    // Admin Login Form Routing.
    Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Admin Register Form Routing.
//Route::get('admin-register', 'AdminAuth\RegisterController@showRegistrationForm');
//Route::post('admin-register', 'AdminAuth\RegisterController@register');
// Admin Passwords Reset Form Routing.
//Route::post('admin/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
//Route::post('admin/password/reset', 'AdminAuth\ResetPasswordController@reset');
//Route::get('admin/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
//Route::get('admin/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
// RERA Dashboard Admin Landing Page Routing.
    Route::get('admin', 'AdminController@index')->name('admin.dashboard');
});

//Route::post('admin/logout', 'Auth\LoginController@logout');


// API Test 2 - working (somewhat).
Route::get('testview','TestController@index'); // Opens Form View
Route::get('findPatientName','TestController@findPatientName'); // Route to controller that handles SELECT tag #2
Route::get('findRoom','TestController@findRoom'); // Route to controller that handles SELECT tag #3
Route::get('findGender','TestController@findGender'); // Route to controller that handles SELECT tag #4
Route::get('findDiagnosis','TestController@findDiagnosis'); // Route to controller that handles SELECT tag #5
Route::get('findTherapistNames','TestController@findTherapistNames'); // Route to controller that handles SELECT tag #7
Route::get('findInpatientWcModels','TestController@findInpatientWcModels'); // Route to controller that handles SELECT tag #9
Route::get('findInpatientWcBrands','TestController@findInpatientWcBrands'); // Route to controller that handles SELECT tag #10

// PhpMyAdmin Route
Route::get('/phpmyadmin/', function () {
    return view('/');
});
