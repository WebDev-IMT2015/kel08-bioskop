<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $primaryKey = 'id_studio';

    protected $fillable = [
    	'jenis', 'jumlah_kursi', 'status'
    ];

}
