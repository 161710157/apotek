<?php

namespace App;
use Session;
use App\Obat;
use App\Kategori;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{   
	protected $table = 'obats';
    protected $fillable = ['nama_obat','harga','gambar','deskripsi','kategori_id'];
    public $timestamps = true;
    
    public function kategoris()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    
}
