<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jam_Tayang_Film;
use App\film;
use App\Bioskop;

class JamTayangFilmController extends Controller
{
    public function index($nama_bioskop){
    	$jtf = Jam_Tayang_Film::all();
      $bioskop = Bioskop::();
      $id_bioskop = $bioskop->where('nama',$nama_bioskop)->first();
      //get based on bioskop
      $tanggal = $jtf->where('id_bioskop',$id_bioskop);
    	return view ('pilihTanggal') ->with('jtf', $tanggal);
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