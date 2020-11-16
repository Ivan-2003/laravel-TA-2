<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Warna;
use Session;
use Alert;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warna_produk = Warna::all();
        return view('HelmetCustom.content.Admin.Warna.IndexWarna',compact('warna_produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HelmetCustom.content.Admin.Warna.CreateWarna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'warna' => 'required|min:5',
        ]);

        $warna = new Warna;
        $warna->warna = $validate['warna'];
        $warna->save();

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('warna.index');
        
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
    public function edit(Warna $warna)
    {
        return view ('HelmetCustom.content.Admin.Warna.EditWarna',compact('warna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warna $warna)
    {
        $validate = $request->validate([
            'warna' => 'required|min:5',
        ]);

        $warna->update($validate);

        Alert::success('Data Berhasil Di Edit!');
        return redirect()->route('warna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warna $warna)
    {
        $warna->delete();


        Alert::success('Data Berhasil Di Delete!');
        return redirect()->route('warna.index');
    }
}
