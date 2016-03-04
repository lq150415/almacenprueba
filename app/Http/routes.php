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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('almacen', function(){
    return view('almacen');
});
Route::get('rubro', function(){
    return view('rubro');
});
Route::get('producto', function(){
    return view('producto');
});
Route::get('usuario', function(){
    return view('usuario');
});