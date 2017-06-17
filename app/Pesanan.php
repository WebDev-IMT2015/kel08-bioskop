<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
    	'id_film', 'id_customer', 'id_kursi', 'id_jtf'
    ];
}
