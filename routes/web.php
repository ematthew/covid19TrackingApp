<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','CoronaController@index');

Auth::routes();

Route::get('/corona', 		 		'CoronaController@create'); //show contact view
// Route::get("my-search", "HomeController@mysearch");
Route::post('/corona',				'CoronaController@store')->name('coronas.store'); //add contact to db
Route::get('/edit/corona/{id}', 	'CoronaController@edit')->name('coronas.edit');   //show edit view
Route::get('/delete/corona/{id}', 	'CoronaController@delete')->name('coronas.delete'); //delete contact from db
Route::post('/corona/{id}', 		'CoronaController@update')->name('coronas.update'); //update contact on db
