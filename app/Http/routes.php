<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/deploy', function () {
    return view('deploy');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgotpass', function () {
    return view('forgotpass');
});

Route::get('/404', function () {
    return view('404');
});

Route::auth();

Route::get('/home', 'HomeController@index');
