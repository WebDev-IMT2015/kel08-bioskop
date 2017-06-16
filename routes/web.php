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

Route::get('/addfilm', function(){
	return view('addfilm');
});

Route::get('/addbioskop', function(){
	return view('addbioskop');
});


Route::POST('addfilm', 'FilmController@insertFilm');

Route::POST('addbioskop', 'BioskopController@insertBioskop');

Route::get('kursibioskop', function (){
	return view('kursiBioskop');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
