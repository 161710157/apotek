<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use File;
use Auth;
use Alert;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
        {
        $this->middleware('auth');
    }

    public function index()
    {
         $galeris = Galeri::all();
        
           return view('galeri.index',compact('galeris'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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

        $this->validate($request,[
            'gambar' => 'required|',
            'judul' => 'required|',
            'slug' => '',
        ]);
        $galeris = new Galeri;
        if ($request->File('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/fotogalery/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $galeris->gambar = $filename;
        }
        $galeris->slug =str_slug($request->nama_obat,'-');
        $galeris->judul = $request->judul;
        $galeris->save();
        
                return redirect()->route('galeri.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $galeris = Galeri::findOrFail($id);
        return view('galeri.edit',compact('galeris'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
           Alert::success('Data Successfully Changed','Good Job!')->autoclose(1700);
          
        $this->validate($request,[
            'gambar' => 'required|',
            'judul' => 'required|',
            'slug' => '',
        ]);
        $galeris = Galeri::findOrFail($id);
        if ($request->File('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/fotogalery/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
        if ($galeris->gambar){
            $old_foto = $galeris->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/fotogalery/'
            . DIRECTORY_SEPARATOR . $galeris->gambar;
              try{
                  file::delete($filepath);
              } catch (FileNotFoundException $e) {

              }

        }
            $galeris->gambar = $filename;
        }
        $galeris->slug =str_slug($request->nama_obat,'-');
        $galeris->judul = $request->judul;
        $galeris->save();
        return redirect()->route('galeri.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Alert::success('Data Successfully Deleted','Good Job!')->autoclose(1700);
       $galeris = Galeri::findOrFail($id);
        $galeris->delete();
        return redirect()->route('galeri.index');
    }
}