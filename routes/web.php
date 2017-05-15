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


Route::get('addEvent', function() {
//    [
//    'uses' => 'MapController@index',
//    'as' => 'map'
    return view('addEvent');
//]
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

Route::get('allPlaces', [
    'uses' => 'EventController@index',
    'as' => 'allPlaces'

]);

Route::get('map', [
    'uses' => 'MapController@index',
    'as' => 'map'

]);

Auth::routes();

Route::get('/home', 'HomeController@index');
