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

Auth::routes();

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logout', 'UserController@logout');


// Profile
Route::get('/profile/{id}', 'ProfilesController@index');

// Dashboards
Route::get('/home', 'DashboardsController@index');
Route::get('/dashboard', 'DashboardsController@index');

// CVs
Route::get('/cv', 'CvsController@index');

// Contact Us
Route::get('/contact', function(){
    return view('contact');
});

// Student Routes
Route::get('/student', 'StudentController@index');
Route::get('/student/dashboard', 'DashboardsController@index');
Route::get('/student/cv', 'CvsController@index');

// Route::get('/get-student', 'StudentController@getStudent');

Route::post('student/profile/update', 'StudentController@updateprofile');
Route::get('/register/student', function() {
    return view('shared.register')->with('role','student');
});

// Hub Routes
Route::get('/register/hub', function(){
    return view('shared.register')->with('role','hub');
});

// Administrator Routes---------------------------------------------------------------------------ADMIN
Route::get('/register/administrator', function(){
    return view('shared.register')->with('role','administrator');
});
Route::get('/profile', 'HomeController@viewMyProfile');
Route::post('/admin-upload-profilepic', 'AdministratorController@uploadProfilePic');
Route::post('/update-administrator', 'AdministratorController@updateAdministrator');

//Admin vouchers
Route::get('/vouchers', 'VoucherController@viewVouchers');
Route::get('/get-voucher-price-for-admin', 'VoucherController@getPriceForAdmin');
Route::post('/buy-vouchers', 'OrderController@buyVouchers');
Route::post('/send-voucher-to-email', 'VoucherController@emailVoucher');

// User Routes
Route::get('/users', 'UserController@index');
Route::get('/user', 'UserController@get');
Route::post('/registersubmit', 'UserController@register');
Route::get('/activate-account/{token}', 'UserController@activateAccount');

//Students
Route::get('/my-students', 'AdministratorController@viewMyStudents');

//Edits
Route::get('/get-review-requests', 'AdministratorController@getReviewRequests');

//Messages
Route::post('/send-message-to-student', 'MessageController@sendToStudent');
Route::get('/get-my-messages', 'MessageController@getMyMessages');
Route::get('/my-inbox', 'MessageController@getMyInbox');
Route::get('/mark-message-as-read/{message_id}', 'MessageController@markAsRead');

//ContactUs
Route::get('/contact', 'HomeController@contactUs');
Route::post('/send-contact-us-message', 'HomeController@sendContactUs');
