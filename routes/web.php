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
    return view('welcome');
});


Route::get('places', function () {
    return view('places');
});

Route::get('messages', function () {
    return view('messages');
});

Route::get('settings', function () {
    return view('settings');
});

Route::get('profile', function () {



//    $user = DB::select('select * from users where username = :username', ['username' => 1]);
    return view('profile');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
