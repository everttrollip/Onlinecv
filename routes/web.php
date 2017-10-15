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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/logout', 'UserController@logout');


Route::get('/student', function () {
    return view('student.dashboard');
});

Route::get('/dashboard', 'HomeController@index');
Route::get('/cv', 'HomeController@cv');
Route::get('/profile/{id}', 'HomeController@profile');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contact');
});

//Student Routes
Route::post('student/profile/update', 'StudentController@updateprofile');
Route::post('/registersubmit', 'UserController@register');

Route::get('/register/student', function(){
    return view('shared.register')->with('role','student');
});
Route::post('/register/student', 'StudentController@updateprofile');
Route::get('/get-student', 'StudentController@getStudent');

//Hub Routes
Route::get('/register/hub', function(){
    return view('shared.register')->with('role','hub');
});


//Endorser Routes
Route::get('/register/endorser', function(){
    return view('shared.register')->with('role','endorser');
});
