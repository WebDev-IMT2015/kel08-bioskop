<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jam_Tayang_Film;
use App\film;


class JamTayangFilmController extends Controller
{
    public function index(){
    	$jtf = Jam_Tayang_Film::all();
    	return view ('pilihTanggal') ->with('jtf', $jtf);
    }

    public function dateClick($date){
	//filter jtf menurut tanggal
   		//$mytime = Carbon\Carbon::now();
      $jtf = Jam_Tayang_Film::all();
   		$dayFiltered = $jtf->where('tgl_tayang', toDateTimeString());
      $filmData = film::all();

   		return view ('pilihJam') ->with('dayFiltered', $dayFiltered)->with('filmData',$filmData);
   		
	}
}