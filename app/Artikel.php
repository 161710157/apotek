<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
     protected $table='artikels';

    protected $fillable=['kategoriartikels_id','judul','gambar','deskripsi','publish'];

    public $timestamps= true;

    public function kategoriartikels()
    {
        return $this->belongsTo('App\Kategoriartikel','kategoriartikels_id');
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}

