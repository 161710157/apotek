<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Obat;
use App\Kategori;
use Session;
use File;
use Alert;

class ObatController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = Obat::with('kategoris')->get();
        $kategori = Kategori::all();
        return view('obat.index',compact('obats', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();     
        return view('obat.create',compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nama_obat' => 'required|',
            'kategori_id' => 'required|',
            'harga' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'slug' => '',
        ]);
        
        $obats = new Obat;
        $obats->nama_obat = $request->nama_obat;
        $obats->kategori_id = $request->kategori_id;
        $obats->harga = $request->harga;
        if ($request->File('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path() .'/assets/img/fotoobat/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $obats->gambar = $filename;
        }

        $obats->deskripsi = $request->deskripsi;
        $obats->slug =str_slug($request->nama_obat,'-');
                $obats->save();
        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obats = Obat::findOrFail($id);
        $kategori = Kategori::all();
        $selectedKategori = Obat::findOrFail($id)->kategori_id;
        return view('obat.edit',compact('obats','kategori','selectedKategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $obat)
    {
        $this->validate($request,[
            'nama_obat' => 'required|max:255',
            'kategori_id' => 'required|',
            'harga' => 'required|',
            'gambar' => 'required|',
            'deskripsi' => 'required|',
            'slug' => '',
        ]);
        
        $obats = Obat::findOrFail($obat);
        $obats->nama_obat = $request->nama_obat;
        $obats->kategori_id = $request->kategori_id;
        $obats->harga = $request->harga;
        
        if ($request->File('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/fotoobat/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);

        if ($obats->gambar){
            $old_foto = $obats->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/fotoobat/'
            . DIRECTORY_SEPARATOR . $obats->gambar;
              try{
                  file::delete($filepath);
              } catch (FileNotFoundException $e) {

              }

        }

            $obats->gambar = $filename;
        }
            
      
        $obats->deskripsi = $request->deskripsi;
        $obats->slug =str_slug($request->nama_obat,'-');
        
           $obats->save();
         return redirect()->route('obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obats = Obat::findOrFail($id);
        $obats->delete();
        return redirect()->route('obat.index');
    }
}