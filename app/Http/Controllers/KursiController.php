<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
use App\Jam_Tayang_Film;
use App\film;

class KursiController extends Controller
{

	public function index(){


        $id_jtf = $_GET['id_jtf'];
		$pesanan = Pesanan::all();
        $filtered = $pesanan->where('id_jtf',$id_jtf);

		return view('kursibioskop')->with('pesanan', $filtered);
    }

	public function addOrder(Request $request){

    	//$nama = $request->input('id_customer');
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
