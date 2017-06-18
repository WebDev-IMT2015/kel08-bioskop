<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Pesanan extends Model
{

	public $table = 'orders';
    protected $primaryKey = 'id_order';

    protected $fillable = [
    	'id_jtf', 'id_kursi', 'jumlah_tiket','tgl_pesan'
    ];
}
