<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jam_Tayang_Film;
use App\Jadwal;


class JamTayangFilmController extends Controller
{
    public function index(){
    	$jtf = Jam_Tayang_Film::all();
    	$Jadwal = Jadwal::all();
    	return view ('pilihjadwal') ->with('jtf', $jtf) -> with('Jadwal',$Jadwal);
    }
}
