<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Jam_Tayang_Film extends Model
{
	public $table = "jam_tayang_films";

    protected $primaryKey = 'id_jtf';

    protected $fillable = [
    	'id_film', 'id_studio', 'harga','jam', 'tgl_tayang'
    ];
}
