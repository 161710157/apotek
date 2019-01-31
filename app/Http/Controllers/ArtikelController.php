<?php

namespace App\Http\Controllers;

use App\Artikel;
use File;
use Alert;
use App\Kategoriartikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.index',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $artikels = Artikel::all();
        $kategoriartikels = Kategoriartikel::all();
        return view('artikel.create',compact('artikels','kategoriartikels'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Successfully Saved','Good Job!')->autoclose(1700);

        $this->validate($request, [
            'judul' => 'required|max:255',
            'gambar' => '',
            'deskripsi' => 'required|min:2',
            'slug' => '',
            'kategoriartikels_id'=> 'required',
        ]);

        $artikels = new Artikel;
        $artikels->judul = $request->judul;
        $artikels->slug =str_slug($request->judul,'-');
        $artikels->deskripsi = $request->deskripsi;
        $artikels->kategoriartikels_id = $request->kategoriartikels_id;

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikels->gambar = $filename;
        } 
        $artikels->save();
        return redirect()->route('artikel.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $artikels = Artikel::findOrFail($id);
        $kategoriartikels = Kategoriartikel::all();
        $selectedkategoriartikel = Artikel::findOrFail($artikels->id)->kategoriartikels_id;
        return view('artikel.edit',compact('artikels','kategoriartikels','selectedkategoriartikel'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Changed','Good Job!')->autoclose(1700);

        $this->validate($request,[
             'judul' => 'required',
             'gambar' => '',
             'deskripsi' => 'required',
             'slug' => '',
             'kategoriartikels_id'=>'required',
            
        ]);

        $artikels = Artikel::findOrFail($id);
        $artikels->judul = $request->judul;
        $artikels->slug =str_slug($request->judul,'-');
        $artikels->kategoriartikels_id = $request->kategoriartikels_id;
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

        if ($artikels->gambar) {
        $old_gambar = $artikels->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/artikel'
        . DIRECTORY_SEPARATOR . $artikels->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $artikels->gambar = $filename;
        }
            $artikels->deskripsi = $request->deskripsi;
            $artikels->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         Alert::success('Data Successfully Deleted','Good Job!')->autoclose(1700);
        
        $artikels = Artikel::findOrFail($id);
        $artikels->delete();
        return redirect()->route('artikel.index');
    }
}

