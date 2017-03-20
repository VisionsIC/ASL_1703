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
// Authentication Routes
Auth::routes();
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