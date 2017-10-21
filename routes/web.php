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
Route::get('/student', function () {
    return view('student.dashboard');
});
Route::post('student/profile/update', 'StudentController@updateprofile');
Route::post('/register/student', 'StudentController@updateprofile');
Route::get('/get-student', 'StudentController@getStudent');
Route::get('/register/student', function() {
    return view('shared.register')->with('role','student');
});

// Hub Routes
Route::get('/register/hub', function(){
    return view('shared.register')->with('role','hub');
});

// Endorser Routes
Route::get('/register/endorser', function(){
    return view('shared.register')->with('role','endorser');
});

// User Routes
Route::post('/registersubmit', 'UserController@register');
