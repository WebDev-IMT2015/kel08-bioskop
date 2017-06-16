<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bioskop;

class BioskopController extends Controller
{
    public function insertBioskop(Request $request){

    	$bioskop = new Bioskop;
    	$bioskop->nama = $request->input('nama');
    	$bioskop->lokasi = $request->input('lokasi');
    	$bioskop->status = 1;
    	$bioskop->save();

		return redirect('/');
    }
}
