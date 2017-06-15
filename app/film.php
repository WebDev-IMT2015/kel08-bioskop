<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $primaryKey = 'id_film';

    protected $fillable = [
    	'judul', 'durasi', 'rate_umur'
    ];
}
