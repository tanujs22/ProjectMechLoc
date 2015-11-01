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

Route::get('/', array('as'=>'home','uses'=>'PagesController@home'));
Route::get('users', array('as'=>'users','uses'=>'PagesController@users'));
//Route::get('admin', array('as'=>'admin','uses'=>'PagesController@admin'));


Route::get('admin', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/reporting', ['uses' =>'ReportController@index', 'as' => 'Report']);
Route::post('/reporting', ['uses' =>'ReportController@post']);