<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jam_Tayang_Film;
use App\film;
use App\Studio;
use App\Jadwal;
use App\Bioskop;

class JamTayangFilmController extends Controller
{
    public function index($nama_bioskop){
    	$jtf = Jam_Tayang_Film::all();
      $bioskop = Bioskop::all();
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

    public function tampil(){
      $jam_tayang = Jam_Tayang_Film::all();
      $film = Film::all();
      $studio = Studio::all();
      $bioskop = Bioskop::all();
      $jadwal = Jadwal::all();

      return view('jamtayang')
      ->with('bioskop', $bioskop)
      ->with('film', $film)
      ->with('studio', $studio)
      ->with('jadwal', $jadwal)
      ->with('jamtayang', $jam_tayang);
    }

    public function store(Request $request){
      $id = $request->input('jadwal');
      $jam_tayang = new Jam_Tayang_Film;
      $jam_tayang->id_jadwal = $id[0];
      $jam_tayang->id_studio = $id[1];
      $jam_tayang->id_film = $id[2];
      $jam_tayang->harga = $request->input('harga');
      $jam_tayang->jam = $request->input('jam');
      $jam_tayang->tgl_tayang = $request->input('tgl');
        // $jam_tayang->status = 1;
      $jam_tayang->save();

    return redirect('jamtayang');
    }

    public function edit($id){
        $jam_tayang = Jam_Tayang_Film::all();
        $jam_tayang_edit = Jam_Tayang_Film::find($id);
        $film = Film::all();
        $studio = Studio::all();
        $bioskop = Bioskop::all();
        $jadwal = Jadwal::all();

        return view('jamtayang')
        ->with('jamtayang', $jam_tayang)
        ->with('bioskop', $bioskop)
        ->with('film', $film)
        ->with('studio', $studio)
        ->with('jadwal', $jadwal)
        ->with('jam_tayang_edit', $jam_tayang_edit);
    }

    public function update(Request $request){
        $id = $request->input('jadwal');
        $jam_tayang = new Jam_Tayang_Film;
        $jam_tayang->id_jadwal = $id[0];
        $jam_tayang->id_studio = $id[1];
        $jam_tayang->id_film = $id[2];
        $jam_tayang->harga = $request->input('harga');
        $jam_tayang->jam = $request->input('jam');
        $jam_tayang->tgl_tayang = $request->input('tgl');
          // $jam_tayang->status = 1;
        $jam_tayang->save();

        return redirect('jamtayang');
    }

    public function destroy($id){
        $jam_tayang = Jam_Tayang_Film::find($id);
        $jam_tayang->delete();
        // $film->status = 0;
        // $film->save();

        return redirect('jamtayang');
    }

}