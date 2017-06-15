<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bioskop extends Model
{
    protected $primaryKey = 'id_bioskop';

    protected $fillable = [
    	'nama', 'lokasi', 'status'
    ];
}
