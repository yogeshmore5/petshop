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

Route::get('/', function()
{
	return View::make('dashboard');
});
Route::get('pet/{id}/services', 'PetController@services');
Route::resource('pet', 'PetController');


Route::get('service/{id}/pets', 'ServiceController@pets');
Route::get('service/assign/{id?}', 'ServiceController@assign');
Route::post('service/allocate/{id?}', 'ServiceController@allocate');
Route::resource('service', 'ServiceController');
