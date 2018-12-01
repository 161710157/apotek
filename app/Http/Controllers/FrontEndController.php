<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use App\Galeri;
use App\Kategori;

class FrontEndController extends Controller
{
     public function index ()
    {
    	return view('frontends.index');
    }
   
    public function kategoris ()
    {
    	$kategoris = Kategori::all();
    	return view('frontends.produk', compact('kategoris'));
    }

    public function Obat()
    {
        $kategorip = Obat::orderBy('created_at','DESC')->paginate(6);
        return view('frontends.produk',compact('kategorip'));
    }

            public function filter_Obat($id)
    {
        $kategorip = Obat::where('kategori_id','=',$id)->get();
        return view('frontends.produk', compact('kategorip'));
    }
          public function singleproduk(Obat $Obat)
    {
    	  return view('frontends.singleproduk',compact('Obat'));
    }

    public function Galeri ()
    {
        $galeris = Galeri::all();
        return view('frontends.galeri', compact('galeris'));
    }


}
