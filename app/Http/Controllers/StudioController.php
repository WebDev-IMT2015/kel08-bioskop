<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;
use App\Bioskop;

class StudioController extends Controller
{

	public function index(){
		$studio = Studio::all();
        $bioskop = Bioskop::all();
		return view('studio')
        ->with('bioskop', $bioskop)
        ->with('studio', $studio);
	}

    public function insertStudio(Request $request){
    	$studio = new Studio;
    	$studio->id_bioskop = $request->input('id_bioskop');
    	$studio->jenis = $request->input('jenis');
    	$studio->jumlah_kursi = 63;
    	$studio->status = 1;
    	$studio->save();

    	return redirect('studio');
    }

    public function edit($id){
        $studio = Studio::all();
        $studio_edit = Studio::find($id);
        $bioskop = Bioskop::all();
        return view('studio')
        ->with('studio', $studio)
        ->with('bioskop', $bioskop)
        ->with('studio_edit', $studio_edit);
    }

    public function update(Request $request){
        $id_studio = $request->input('id_studio');
        $studio = Studio::find($id_studio);
    	$studio->jenis = $request->input('jenis');
    	$studio->jumlah_kursi = 63;
        $studio->save();

        return redirect('studio');
    }

    public function destroy($id){
        $studio = Studio::find($id);
        $studio->status=0;
        $studio->save();

        return redirect('studio');
    }
}
