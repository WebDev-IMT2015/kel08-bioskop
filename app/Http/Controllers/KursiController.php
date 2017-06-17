<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursiController extends Controller
{

	public function insertFilm(Request $request){

    	$nama = $request->input('id_customer');
    	$kursi = $request->input('id_kursi');
    	$film = $request->input('id_film');
    	$jtf = $request->input('id_jtf');
    	$pesanan = new Pesanan;
    	$pesanan->id_customer = $nama;
    	$pesanan->id_kursi = $kursi;
    	$pesanan->id_film = $film;
    	$pesanan->id_jtf = $jtf;
    	$pesanan->save();

		return redirect('');
    }

}
