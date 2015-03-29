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
	return View::make('hello');
});

Route::get('/blade', function()
{
	return View::make('blade');
});
Route::resource('users', 'UserController');
Route::resource('pelanggan', 'PelangganController');


Route::resource('create','UserController@create');

Route::resource('books','BookController');
Route::get('/register', 'BookController@showBookRegistration');
Route::post('/register', 'BookController@saveBook');

Route::resource('nerds', 'NerdController');
Route::resource('cruds', 'CrudController');