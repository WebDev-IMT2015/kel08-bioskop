<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;

class FilmController extends Controller
{
    public function index(){
        $film = Film::all();
        return view('film')->with('film', $film);
    }

    public function insertFilm(Request $request){

    	$judul = $request->input('judul');
    	$durasi = $request->input('durasi');
    	$rate = $request->input('rate_umur');
    	$film = new Film;
    	$film->judul = $judul;
    	$film->durasi = $durasi;
    	$film->rate_umur = $rate;
    	$film->save();

		return redirect('film');
    }

    public function edit($id){
        $film = Film::all();
        $film_edit = Film::find($id);
        return view('film')
        ->with('film', $film)
        ->with('film_edit', $film_edit);
    }

    public function update(Request $request){
        $id_film = $request->input('id_film');
        $film = Film::find($id_film);
        $film->judul = $request->input('judul');
        $film->durasi = $request->input('durasi');
        $film->rate_umur = $request->input('rate_umur');
        $film->save();

        return redirect('film');
    }

    public function destroy($id){
        $film = Film::find($id);
        $film->delete();

        return redirect('film');
    }
}
