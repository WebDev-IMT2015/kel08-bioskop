<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;
use App\Bioskop;

class StudioController extends Controller
{
    public function insertStudio(Request $request){
    	$studio = new Studio;
    	$studio->bioskop()->associate($bioskop);
    	$studio->jenis = $request->input('jenis');
    	$studio->jumlah_kursi = $request->input('jumlah_kursi');
    	$studio->status = 1;
    	$studio->save();

    	return redirect('studio');
    }
}
