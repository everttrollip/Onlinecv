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
Route::get('/student', 'StudentsController@index');
Route::get('/student/dashboard', 'StudentsController@index');
Route::get('/student/cv', 'CvsController@index');

Route::get('/get-student', 'StudentsController@getStudent');

Route::post('student/profile/update', 'StudentsController@updateprofile');
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
Route::get('/users', 'UserController@index');
Route::get('/user', 'UserController@get');
Route::post('/registersubmit', 'UserController@register');
