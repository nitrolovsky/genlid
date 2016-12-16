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
    //$json = file_get_contents("../database/data/2016-11-03-10-12-pilka.json");
    //$data = json_decode($json, true);
    //return view('welcome')
        //->with('data', $data);

    return View('subscription');
});

Route::get('users/login', 'UserController@viewLogin');
Route::post('users/login', 'UserController@login');
Route::get('users/logout', 'UserController@logout');
Route::resource('users', 'UserController');

Route::get('pages/{id}/a', 'PageController@showA');
Route::get('pages/{id}/b', 'PageController@showB');
Route::get('pages/{id}/c', 'PageController@showC');
Route::get('pages/{id}/d', 'PageController@showD');

Route::get('pages/{id}/thanks', 'PageController@showThanks');

Route::get('pages/all', 'PageController@showAll');

Route::resource('pages', 'PageController');

Route::resource('proposals', 'ProposalController');
