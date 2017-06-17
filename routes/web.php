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

Route::get('/studio', function(){
	return view('studio');
});

Route::get('/kursibioskop', function (){
	return view('kursiBioskop');
});

Route::POST('addOrder', 'KursiController@insertOrder');

Route::get('film', 'FilmController@index');
Route::POST('film', 'FilmController@insertFilm');
Route::get('film/{id}/edit', 'FilmController@edit')->name('film.edit');
Route::post('film/edit', 'FilmController@update')->name('film.update');
Route::get('film/delete/{id}', 'FilmController@destroy')->name('film.delete');


Route::get('bioskop', 'BioskopController@index');
Route::POST('bioskop', 'BioskopController@insertBioskop');
Route::get('bioskop/{id}/edit', 'BioskopController@edit')->name('bioskop.edit');
Route::post('bioskop/edit', 'BioskopController@update')->name('bioskop.update');
Route::get('bioskop/delete/{id}', 'BioskopController@destroy')->name('bioskop.delete');


Route::POST('studio', 'StudioController@insertStudio');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
