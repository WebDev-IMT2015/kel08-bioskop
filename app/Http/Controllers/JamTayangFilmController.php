<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jam_Tayang_Film;
use App\film;
use App\Studio;
use App\Jadwal;
use App\Bioskop;
use DB;

class JamTayangFilmController extends Controller
{
    public function index(){
    	//pass these tables to the view
      
      // $bioskop = DB::table('bioskops')->where('nama',$nama_bioskop)->get();
      
      // //$nama_bioskop = str_replace("_"," ", $nama_bioskop);
      // //get based on bioskop
      // $studio = DB::table('studios')->where('id_bioskop', '=', $bioskop->id_bioskop)->get();
      // $jtf = Jam_Tayang_Film::all();

      // foreach ($jtf as $loop) {
      //   foreach ($studio as $loop2) {
      //     if($loop->id_studio == $loop2->id_studio){
      //       $tanggal = $loop;
      //     }
      //   }
      // }
      //$tanggal = $jtf->where('id_studio', $studio->id_studio);
      // foreach ($tanggal as $loop) {
      //   if($loop == ){
      //     $unique == $loop
      //   }
      // }
      // $unique = $tanggal->unique('tgl_tayang');

      $id_bioskop=$_GET['id_bioskop'];
      $studio = DB::table('studios')->where('id_bioskop', '=', $id_bioskop)->get();
      $jtf = DB::table('jam_tayang_films')->get();
      
      foreach ($studio as $sf) {//filter by bioskop
        foreach ($jtf as $times) {
          if($sf->id_studio == $times->id_studio)
            $stimes = $jtf;
        }

        //$jtf = DB::table('jam_tayang_films')->where('id_studio', '=', $sf->id_studio)->get();
      }


    	return view ('/pilih') ->with('tanggal', $jtf) ->with('id_bioskop',$id_bioskop);
    }

    public function dateClick(){
      $date =  $_GET['date'];
      $id_bioskop =  $_GET['id_bioskop'];
      $jtf = DB::table('jam_tayang_films')
      ->where('tgl_tayang', '=', $date)->get();//filter by date
      $films = DB::table('films')->get();
      //$filmData = DB::table('films')->where('id_film', '=', $times->id_film)->get();
      
      $studio = DB::table('studios')->where('id_bioskop', $id_bioskop)->get();

      foreach ($jtf as $times) {//filter by bioskop
        foreach ($studio as $st) {
          if($st->id_studio == $times->id_studio)
            $sfil =  $times;
        }
      }

      if(isset($sfil)){
        foreach ($sfil as $times) {//filter film data using filtered showtimes
          foreach ($films as $lf) {
            if($lf->id_film ==  $times->id_film)
              $filmData = $lf;
          }  
        }
      }else{
        foreach ($jtf as $times) {//filter film data using unffiltered showtimes
          foreach ($films as $lf) {
            if($lf->id_film ==  $times->id_film)
              $filmData = $lf;
          }  
        }

        return view ('pilih') 
      ->with('times', $times)
      ->with('filmData',$filmData)
      ->with('date', $date);
      }


   		return view ('pilih') 
      ->with('times', $sfil)
      ->with('filmData',$filmData)
      ->with('date', $date);
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