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
    return view('welcome');
});

Route::get('/film', function(){
	return view('film');
});

Route::get('/bioskop', function(){
	return view('bioskop');
});


Route::POST('film', 'FilmController@insertFilm');

Route::POST('bioskop', 'BioskopController@insertBioskop');

Route::get('kursibioskop', function (){
	return view('kursiBioskop');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
