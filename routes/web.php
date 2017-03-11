<?php
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
// Index Route.
Route::get('/', function () {
    return view('welcome');
});
// Bootstrap Test Route.
Route::get('bootstrap', function () {
    return view('firstbootstrap');
});
// Authentication Routes
Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function()
{
// all routes here will require the user to be logged in
//// RERA Dashboard Home Landing Page Routing.
    Route::get('home', 'HomeController@index');
// RERA Dashboard Home Wheelchair Requests Routing.
    Route::get('findPatientName', 'HomeController@findPatientName'); // Route to controller that handles SELECT tag #2
    Route::get('findRoom', 'HomeController@findRoom'); // Route to controller that handles SELECT tag #3
    Route::get('findGender', 'HomeController@findGender'); // Route to controller that handles SELECT tag #4
    Route::get('findDiagnosis', 'HomeController@findDiagnosis'); // Route to controller that handles SELECT tag #5
    Route::get('findTherapistNames', 'HomeController@findTherapistNames'); // Route to controller that handles SELECT tag #7
    Route::get('findInpatientWcModels', 'HomeController@findInpatientWcModels'); // Route to controller that handles SELECT tag #9
    Route::get('findInpatientWcBrands', 'HomeController@findInpatientWcBrands'); // Route to controller that handles SELECT tag #10
// User Wheelchair Requests Form Routing.
    Route::get('user/wcrequests', 'UserAuth\WcRequestsController@showWcRequestsForm');
    Route::post('user/wcrequests', 'UserAuth\WcRequestsController@wcrequestsform');
// RERA Dashboard Profile Page Routing.
    Route::get('profile', 'UserController@profile');
});
// User Login Form Routing.
Route::get('user/login', 'UserAuth\LoginController@showLoginForm');
Route::post('user/login', 'UserAuth\LoginController@login');
Route::post('user/logout', 'UserAuth\LoginController@logout');
// User Register Form Routing.
Route::get('user/register', 'UserAuth\RegisterController@showRegistrationForm');
Route::post('user/register', 'UserAuth\RegisterController@register');
// User Passwords Form Routing.
Route::post('user/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('user/password/reset', 'UserAuth\ResetPasswordController@reset');
Route::get('user/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('user/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
// Admin Login Form Routing.
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::post('admin/logout', 'AdminAuth\LoginController@logout');
// Admin Register Form Routing.
Route::get('admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin/register', 'AdminAuth\RegisterController@register');
// Admin Passwords Reset Form Routing.
Route::post('admin/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('admin/password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('admin/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
// API Controller Routing For Dependant Dynamic Drop Down Feature of Multi-Step Form Wizard.
Route::get('ajaxJsonResponse', 'HomeController@ajaxJsonResponse');
// API Test 1 - working.
Route::get('testauto','TestAutoController@index'); // View Control
Route::get('findUnits','TestAutoController@findUnits'); // Method Control
Route::get('findPatientNames','TestAutoController@findPatientNames'); // Method Control
Route::get('findRooms','TestAutoController@findRooms'); // Method Control
Route::get('findGender','TestAutoController@findGender'); // Method Control
Route::get('findDiagnosis','TestAutoController@findDiagnosis'); // Method Control
Route::get('findTherapistTitles','TestAutoController@findTherapistTitles'); // Method Control
Route::get('findTherapistNames','TestAutoController@findTherapistNames'); // Method Control
Route::get('findWcTypes','TestAutoController@findWcTypes'); // Method Control
Route::get('findInpatientWcModels','TestAutoController@findInpatientWcModels'); // Method Control
Route::get('findInpatientWcBrands','TestAutoController@findInpatientWcBrands'); // Method Control
Route::get('findWcDimensions','TestAutoController@findWcDimensions'); // Method Control
Route::get('findWcHeights','TestAutoController@findWcHeights'); // Method Control
Route::get('findWcBacks','TestAutoController@findWcBacks'); // Method Control
Route::get('findCushionTypes','TestAutoController@findCushionTypes'); // Method Control
Route::get('findCushionDimensions','TestAutoController@findCushionDimensions'); // Method Control
Route::get('findArmrestTypes','TestAutoController@findArmrestTypes'); // Method Control
// API Test 2 - working (somewhat).
Route::get('testview','TestController@index'); // Opens Form View
Route::get('findPatientName','TestController@findPatientName'); // Route to controller that handles SELECT tag #2
Route::get('findRoom','TestController@findRoom'); // Route to controller that handles SELECT tag #3
Route::get('findGender','TestController@findGender'); // Route to controller that handles SELECT tag #4
Route::get('findDiagnosis','TestController@findDiagnosis'); // Route to controller that handles SELECT tag #5
Route::get('findTherapistNames','TestController@findTherapistNames'); // Route to controller that handles SELECT tag #7
Route::get('findInpatientWcModels','TestController@findInpatientWcModels'); // Route to controller that handles SELECT tag #9
Route::get('findInpatientWcBrands','TestController@findInpatientWcBrands'); // Route to controller that handles SELECT tag #10
// Test 2 (Closure)
// Route::get('names/{id}', function($id) {$names = array(1 => "John", 2 => "Mary", 3 => "Steven"); return array($id => $names[$id]);});
//Route::resource('names', 'NameController');

// Test Roles Feature
//Route::group(['middleware' => 'web'], function () {
    //Route::get('/', function () {
        //return view('index');
    //})->name('main');
    //Route::get('/author', [
        //'uses' => 'AppController@getAuthorPage',
        //'as' => 'author',
        //'middleware' => 'roles',
        //'roles' => ['Admin', 'Author']
    //]);
    //Route::get('/author/generate-article', [
        //'uses' => 'AppController@getGenerateArticle',
        //'as' => 'author.article',
        //'middleware' => 'roles',
        //'roles' => ['Author']
    //]);
    //Route::get('/admin', [
        //'uses' => 'AppController@getAdminPage',
        //'as' => 'admin',
        //'middleware' => 'roles',
        //'roles' => ['Admin']
    //]);
    //Route::post('/admin/assign-roles', [
       // 'uses' => 'AppController@postAdminAssignRoles',
       // 'as' => 'admin.assign',
        //'middleware' => 'roles',
        //'roles' => ['Admin']
    //]);
    //Route::get('/signup', [
       // 'uses' => 'AuthController@getSignUpPage',
       // 'as' => 'signup'
   // ]);
   // Route::post('/signup', [
     //   'uses' => 'AuthController@postSignUp',
      //  'as' => 'signup'
    //]);
    //Route::get('/signin', [
       // 'uses' => 'AuthController@getSignInPage',
       // 'as' => 'signin'
   // ]);
   // Route::post('/signin', [
      //  'uses' => 'AuthController@postSignIn',
      //  'as' => 'signin'
    //]);
    //Route::get('/logout', [
      //  'uses' => 'AuthController@getLogout',
      //  'as' => 'logout'
    //]);
//});
// Laravel Collective Test Route
Route::get('form', function () {
    return view('newformpage');
});