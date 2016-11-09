<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $json = file_get_contents("../database/data/2016-11-03-10-12-pilka.json");
    $data = json_decode($json, true);
    return view('subscription')
        ->with('data', $data);
});

Route::get('users/login', 'UserController@viewLogin');
Route::post('users/login', 'UserController@login');
Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('pages/{id}/hide', 'PageController@hide');
Route::get('pages/{id}/publish', 'PageController@publish');
Route::resource('pages', 'PageController');
