<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Warna;
use App\Produk;
use App\StatusProduk;
use Session;
use Alert;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_produk = Produk::all();
        return view('HelmetCustom.content.Admin.Produk.IndexProduk',compact('data_produk')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_status = StatusProduk::all();
        $data_warna = Warna::all();
        return view('HelmetCustom.content.Admin.Produk.CreateProduk',compact('data_status','data_warna'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required|min:5',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'deskripsi_produk' => 'required',
            'warna_produk_id' => 'required',
            'status_produk_id' => 'required',
            'foto_produk' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('foto_produk');
        $image->storeAs('public/gallerys',$image->hashName());

        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'stok_produk' => $request->stok_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'warna_produk_id' => $request->warna_produk_id,
            'status_produk_id' => $request->status_produk_id,
            'foto_produk' => $image->hashName(),
        ]);


            Alert::success('Sukses', 'Data Berhasil Di Input!');
            return redirect()->route('produk.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $produk->find($produk->id)->all();
        $data_warna = Warna::all();
        $data_status = StatusProduk::all();
        return view('HelmetCustom.content.Admin.Produk.EditProduk',compact('produk','data_status','data_warna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $this->validate($request, [
            'nama_produk' => 'required|min:5',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'deskripsi_produk' => 'required',
            'warna_produk_id' => 'required',
            'status_produk_id' => 'required',
        ]);

        $produk = Produk::findOrFail($produk->id);

        if($request->file('foto_produk') == ""){
            $produk->update([
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'stok_produk' => $request->stok_produk,
                'deskripsi_produk' => $request->deskripsi_produk,
                'warna_produk_id' => $request->warna_produk_id,
                'status_produk_id' => $request->status_produk_id,
            ]);
        }else{
            Storage::disk('local')->delete('public/gallerys/'.$produk->foto_produk);

            $image = $request->file('foto_produk');
            $image->storeAs('public/gallerys',$image->hashName());

            $produk->update([
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'stok_produk' => $request->stok_produk,
                'deskripsi_produk' => $request->deskripsi_produk,
                'warna_produk_id' => $request->warna_produk_id,
                'status_produk_id' => $request->status_produk_id,
                'foto_produk' => $image->hashName()
            ]);
        }

            Alert::success('Data Berhasil Di Edit!');
            return redirect()->route('produk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

            Alert::success('Data Berhasil Di Delete!');
            return redirect()->route('produk.index');

    }
}
