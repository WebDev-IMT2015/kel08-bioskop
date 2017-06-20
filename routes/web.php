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

Route::get('/dataPenjualan', function(){
	return view('dataPenjualan');
});

Route::get('/jamtayang', function(){
	return view('jamtayang');
});


Route::get('/printTicket', function(){
	return view('printTicket');
});

// Route::get('/kursibioskop', function (){
// 	return view('kursiBioskop');
// });

//cs side
Route::get('/pilihbioskop', 'BioskopController@displayBioskop');
Route::get('/pilihtanggal', 'JamTayangFilmController@index');
Route::get('/pilihjam', 'JamTayangFilmController@dateClick');
Route::get('/kursibioskop', 'KursiController@index');
Route::POST('addOrder', 'KursiController@addOrder');

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

Route::get('dataPenjualan','OrderController@index');
Route::get('printTicket','printController@index');

Route::get('studio', 'StudioController@index');
Route::POST('studio', 'StudioController@insertStudio');
Route::get('studio/{id}/edit', 'StudioController@edit')->name('studio.edit');
Route::post('studio/edit', 'StudioController@update')->name('studio.update');
Route::get('studio/delete/{id}', 'StudioController@destroy')->name('studio.delete');

Route::get('user', 'UserController@index');
Route::POST('user', 'UserController@insertUser');
Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::POST('user/edit', 'UserController@update')->name('user.update');
Route::get('user/delete/{id}', 'UserController@destroy')->name('user.delete');

Route::get('jadwal', 'JadwalController@index');
Route::POST('jadwal', 'JadwalController@insertJadwal');
Route::get('jadwal/{id}/edit', 'JadwalController@edit')->name('jadwal.edit');
Route::POST('jadwal/edit', 'JadwalController@update')->name('jadwal.update');
Route::get('jadwal/delete/{id}', 'JadwalController@destroy')->name('jadwal.delete');

Route::get('jamtayang', 'JamTayangFilmController@tampil');
Route::POST('jamtayang', 'JamTayangFilmController@store');
Route::get('jamtayang/{id}/edit', 'JamTayangFilmController@edit')->name('jamtayang.edit');
Route::POST('jamtayang/edit', 'JamTayangFilmController@update')->name('jamtayang.update');
Route::get('jamtayang/delete/{id}', 'JamTayangFilmController@destroy')->name('jamtayang.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
