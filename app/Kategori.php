<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     protected $fillable = ['kategori'];

    public function Obat()
    {
        return $this->hasMany('App\Obat', 'kategori_id');
    }
   
}
