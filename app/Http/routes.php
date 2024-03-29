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

// -----------------AUTHENTICATED ROUTES ------------------//
Route::get('/dashboard', ['middleware' => 'auth', function() {
    return view('/dashboard');
}]);

Route::get('/deploy', ['middleware' => 'auth', function () {
    return view('deploy');
}]);

Route::get('/profile', ['middleware' => 'auth', function () {
    return view('profile');
}]);

Route::get('/support', ['middleware' => 'auth', function () {
    return view('support');
}]);

Route::get('/blog', ['middleware' => 'auth', function () {
    return view('blog');
}]);


// -----------------PUBLIC  ROUTES ------------------//
Route::get('/', function () {
    return view('landing');
});

Route::get('/forgotpass', function () {
    return view('forgotpass');
});

Route::get('/404', function () {
    return view('404');
});

// -----------------AUTHENTICATION------------------//
Route::get('/login', 'Auth\AuthController@getLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/register', 'Auth\AuthController@getRegister');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
