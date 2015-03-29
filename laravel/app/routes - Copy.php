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

Route::get('/tes', 'SiteController@halojuga');

Route::get('/register', function()
{
	return View::make('register');
});

Route::post('/register', function()
{
    $user = new User;
    $user->email    = Input::get('email');
    $user->nim = Input::get('nim');
    $user->password = Hash::make(Input::get('password'));
    $user->save();

    return Redirect::to("register");
});


Route::get('/pelanggan', function()
{
	return View::make('pelanggan');
});

Route::post('/pelanggan', function()
{
    $pelanggan = new Pelanggan;
	$pelanggan->nama = Input::get('nama');
	$pelanggan->alamat = Input::get('alamat');
	$pelanggan->save();

	return Redirect::to("pelanggan");

    
});

