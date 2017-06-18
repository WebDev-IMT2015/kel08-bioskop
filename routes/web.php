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

// Route::get('/kursibioskop', function (){
// 	return view('kursiBioskop');
// });

Route::get('/pilihtanggal', 'JadwalController@index');
Route::get('/pilihjam/{$date}', 'JamTayangFilmController@dateClick');
// Route::get('kursibioskop/{event}/remind/{user}', [
// 'as' => 'remindHelper', 'uses' => 'KursiController@index']);
Route::get('/kursibioskop/{studio}/{film}/{jam}', 'KursiController@index');
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


Route::get('studio', 'BioskopController@getBioskop');
Route::POST('studio', 'StudioController@insertStudio');

Route::get('user', 'UserController@index');
Route::POST('user', 'UserController@insertUser');
Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::POST('user/edit', 'UserController@update')->name('user.update');
Route::get('user/delete/{id}', 'UserController@destroy')->name('user.delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
