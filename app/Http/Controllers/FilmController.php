<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;

class FilmController extends Controller
{
    public function insertFilm(Request $request){

    	$judul = $request->input('judul');
    	$durasi = $request->input('durasi');
    	$rate = $request->input('rate_umur');
    	$film = new Film;
    	$film->judul = $judul;
    	$film->durasi = $durasi;
    	$film->rate_umur = $rate;
    	$film->save();

		return redirect('/');
    }
}
