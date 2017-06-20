<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
    	'id_studio', 'id_film', 'tgl_mulai','tgl_berakhir'
    ];
}
