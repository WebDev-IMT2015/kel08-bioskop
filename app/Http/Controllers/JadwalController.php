<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\film;
use App\Studio;
use App\Bioskop;

class JadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::all();
        $film = Film::all();
        $studio = Studio::all();
        $bioskop = Bioskop::all();
        return view('jadwal')
        ->with('bioskop', $bioskop)
        ->with('film', $film)
        ->with('studio', $studio)
        ->with('jadwal', $jadwal);
    }

    public function insertJadwal(Request $request){
    	$jadwal = new Jadwal;
        $jadwal->id_studio = $request->input('id_studio');
    	$jadwal->id_film = $request->input('id_film');
    	$jadwal->tgl_tayang = $request->input('tgl_tayang');
    	$jadwal->tgl_berhenti = $request->input('tgl_berhenti');
        $jadwal->status = 1;
    	$jadwal->save();

		return redirect('jadwal');
    }

    public function edit($id){
        $jadwal = Jadwal::all();
        $jadwal_edit = Jadwal::find($id);
        $film = Film::all();
        $studio = Studio::all();
        $bioskop = Bioskop::all();
        return view('jadwal')
        ->with('jadwal', $jadwal)
        ->with('bioskop', $bioskop)
        ->with('film', $film)
        ->with('studio', $studio)
        ->with('jadwal_edit', $jadwal_edit);
    }

    public function update(Request $request){
        $id_jadwal = $request->input('id_jadwal');
        $jadwal = Jadwal::find($id_jadwal);
        $jadwal->id_film = $request->input('id_film');
    	$jadwal->id_studio = $request->input('id_studio');
    	$jadwal->tgl_tayang = $request->input('tgl_tayang');
    	$jadwal->tgl_berhenti = $request->input('tgl_berhenti');
        $jadwal->save();

        return redirect('jadwal');
    }

    public function destroy($id){
        $jadwal = Jadwal::find($id);
        $jadwal->status = 0;
        $jadwal->save();

        return redirect('jadwal');
    }
}
