<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
    	'id_jtf', 'id_kursi', 'jumlah_tiket','tgl_pesan'
    ];
}
