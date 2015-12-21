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

Route::get('/', 'ViewController@getHomepage');
Route::get('/sandbox', 'ViewController@getSandbox');

// Internal
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard','ViewController@getDashboard');
    Route::get('/ticket/create', 'ViewController@getTicketNew');

    Route::post('/ticket/create', 'TicketController@create');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');