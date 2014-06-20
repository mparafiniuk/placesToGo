<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'login.index', 'uses' => 'AuthController@index']);

Route::post('/login', ['as' => 'login.doLogin', 'uses' => 'AuthController@doLogin']);

Route::get('places/{visited}', 'PlacesController@index');

Route::resource('places', 'PlacesController');