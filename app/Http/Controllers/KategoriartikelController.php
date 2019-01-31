<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategoriartikel;
use App\Artikel;
use Alert;

class KategoriartikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriartikels = Kategoriartikel::all();
        return view('kategoriartikel.index',compact('kategoriartikels'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriartikel.create');
 
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
            'nama_kategori' => 'required',
            'slug' => '',
           
        ]);

        $kategoriartikels = new Kategoriartikel;
        $kategoriartikels->nama_kategori = $request->nama_kategori;
        $kategoriartikels->slug =str_slug($request->nama_kategori,'-');
        $kategoriartikels->save();
        return redirect()->route('kategoriartikel.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Kategoriartikel  $kategoriartikel
     * @return \Illuminate\Http\Response
     */
    public function show(Kategoriartikel $kategoriartikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategoriartikel  $kategoriartikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriartikels = Kategoriartikel::findOrFail($id);
        return view('kategoriartikel.edit',compact('kategoriartikels'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategoriartikel  $kategoriartikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       Alert::success('Data Successfully Changed','Good Job!')->autoclose(1700);

         $this->validate($request,[
             'nama_kategori' => 'required',
             'slug' => '',

        ]);

        $kategoriartikels = Kategoriartikel::findOrFail($id);
        $kategoriartikels->nama_kategori = $request->nama_kategori;
        $kategoriartikels->slug =str_slug($request->nama_kategori,'-');
        $kategoriartikels->save();
        return redirect()->route('kategoriartikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategoriartikel  $kategoriartikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data Successfully Deleted','Good Job!')->autoclose(1700);

        $kategoriartikels = Kategoriartikel::findOrFail($id);
        $kategoriartikels->delete();
        return redirect()->route('kategoriartikel.index');
    }
}