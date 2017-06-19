<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
use App\Jam_Tayang_Film;
use App\Studio;
use App\Bioskop;
use App\Film;

class OrderController extends Controller
{
    public function index(){
    	$pesanan = Pesanan::all();
    	$jam = Jam_Tayang_Film::all();
    	$studio = Studio::all();
        $bioskop = Bioskop::all();
        $film = Film::all();
        return view('datapenjualan')
        ->with('pesanan', $pesanan)
        ->with('jam', $jam)
        ->with('studio', $studio)
        ->with('bioskop', $bioskop)
        ->with('film', $film);
    }
}
