<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use App\Galeri;
use App\Kategori;
use App\Testimoni;
use App\Kategoriartikel;
use App\Artikel;
class FrontEndController extends Controller
{
     public function index ()
    {
    	return view('frontends.index');
    }
   
    public function artikels ()
    {
        $artikels = Artikel::orderBy('created_at','DESC')->paginate(3);
        return view('frontends.blog', compact('artikels'));
    }
    
      public function filter_artikels($id)
    {
        $kategoripartikel = Artikel::where('kategoriartikels_id','=',$id)->get();
        return view('frontends.blog', compact('kategoripartikel'));
    }

    public function kategoris ()
    {
    	$kategoris = Kategori::all();
    	return view('frontends.produk', compact('kategoris'));
    }
    public function kategoriartikels ()
    {
        $kategoriartikels = Kategoriartikel::all();
        return view('frontends.blog', compact('kategoriartikels'));
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
      public function single(Artikel $artikels)
    {
     return view('frontends.single',compact('artikels'));
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

public function Testimoni ()
    {
        $testimonis = Testimoni::all();
        return view('frontends.testimoni', compact('testimonis'));
    }

}
