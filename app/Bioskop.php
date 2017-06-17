<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bioskop extends Model
{
    protected $primaryKey = 'id_bioskop';

    protected $fillable = [
    	'nama', 'lokasi', 'status'
    ];

    public function studio(){
    return $this->belongsTo('App\Studio', 'id_bioskop', 'id_bioskop');
	}
}
