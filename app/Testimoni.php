<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    
    protected $table='Testimoni';

    protected $fillable=['testimoni'];

    public $timestamps= true;
}
