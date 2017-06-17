<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;

class KursiController extends Controller
{

	public function index($id_film, $id_jtf){

		$pesanan = Pesanan::all();

		return view('kursibioskop')->with('id_film', $id_film)
		->with('id_jtf', $id_jtf)->with('pesanan', $pesanan);
    }

	public function addOrder(Request $request){

    	$nama = $request->input('id_customer');
    	$kursi = $request->input('id_kursi');
    	$jumlah_tiket = $request->input('jumlah_tiket');
    	$jtf = $request->input('id_jtf');
    	$pesanan = new Pesanan;

    	$pesanan->id_jtf = $jtf;
    	$pesanan->id_kursi = $kursi;
    	$pesanan->jumlah_tiket = $jumlah_tiket;
    	$pesanan->tgl_pesan = timestamp('added_on');
    	$pesanan->save();

		return redirect('');
    }

}
