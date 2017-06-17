<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bioskop;

class BioskopController extends Controller
{
	public function index(){
        $bioskop = Bioskop::all();
        return view('bioskop')->with('bioskop', $bioskop);
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
        $bioskop->delete();

        return redirect('bioskop');
    }
}
