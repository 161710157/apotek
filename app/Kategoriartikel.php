<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriartikel extends Model
{
    protected $table='kategoriartikels';
    
    protected $fillable=['nama_kategori'];

    public $timestamps= true;

		public function Obat()
    {
        return $this->hasOne('App\Artikel','artikels_id');
    }
}


