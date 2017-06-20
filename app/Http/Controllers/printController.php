<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
use App\Jam_Tayang_Film;
use App\Studio;
use App\Bioskop;
use App\Film;

class printController extends Controller
{
    public function index(){
    	$pesanan = Pesanan::find(1);
    	$jam = Jam_Tayang_Film::find($pesanan->id_jtf);
    	$studio = Studio::find($jam->id_studio);
        $bioskop = Bioskop::find($studio->id_bioskop);
        $film = Film::find($jam->id_film);
        return view('printTicket')  
        ->with('psn', $pesanan)
        ->with('jm', $jam)
        ->with('stu', $studio)
        ->with('bio', $bioskop)
        ->with('fil', $film);
    }
}