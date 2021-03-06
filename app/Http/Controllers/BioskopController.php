<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bioskop;
use App\Studio;
use App\Jam_Tayang_Film;

class BioskopController extends Controller
{
	public function index(){
        $bioskop = Bioskop::all();
        return view('bioskop')->with('bioskop', $bioskop);
    }

    public function displayBioskop(){
        
        $bioskop = Bioskop::all();
        // $Studio = Studio::all();
        // $jtf = Jam_Tayang_Film::all();

        // foreach ($bioskop as $b) {
        //     foreach ($Studio as $s) {
        //         foreach ($jtf as $j) {
        //             if($j->id_studio == $s->id_studio && $s->id_bioskop == $b->id_bioskop)
        //                 $fb = $b;
        //         }
        //     }
        // }
        // dd($fb);
        return view('pilih')->with('bioskop', $bioskop);
    }

    public function insertBioskop(Request $request){

    	$bioskop = new Bioskop;
    	$bioskop->nama = $request->input('nama');
    	$bioskop->lokasi = $request->input('lokasi');
    	$bioskop->status = 1;
    	$bioskop->save();

		return redirect('bioskop');
    }

    public function edit($id){
        $bioskop = Bioskop::all();
        $bioskop_edit = Bioskop::find($id);
        return view('bioskop')
        ->with('bioskop', $bioskop)
        ->with('bioskop_edit', $bioskop_edit);
    }

    public function update(Request $request){
        $id_bioskop = $request->input('id_bioskop');
        $bioskop = Bioskop::find($id_bioskop);
        $bioskop->nama = $request->input('nama');
        $bioskop->lokasi = $request->input('lokasi');
        $bioskop->save();

        return redirect('bioskop');
    }

    public function destroy($id){
        $bioskop = Bioskop::find($id);
        $bioskop->status=0;
        $bioskop->save();

        return redirect('bioskop');
    }
}
