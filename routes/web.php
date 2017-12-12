<?php

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

Route::get('/', function () {
	if(Auth::check()){
		Auth::logout();
		return view('welcome');

	}else{
    	return view('welcome');
	}
});

Route::get('/mensajes', function () {
    return view('mensajes');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/buscar', function () {
    return view('buscar');
});
Route::get('/notificaciones', function () {
    return view('notificaciones');
});
Route::get('/misviajes', function () {
    return view('misViajesMobile');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('/llevar', function () {
    return view('llevar');
});

Route::get('/cuenta', function () {
    return view('cuenta');
});

Route::get('/test', function () {
    return 'test';
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
