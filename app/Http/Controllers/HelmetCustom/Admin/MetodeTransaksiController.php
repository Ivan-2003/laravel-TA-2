<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MetodeTransaksi;
use Session;
use Alert;

class MetodeTransaksiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $method_transaksi = MetodeTransaksi::all();
        return view('HelmetCustom.content.Admin.MetodeTransaksi.IndexMetodeTransaksi',compact('method_transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HelmetCustom.content.Admin.MetodeTransaksi.CreateMetodeTransaksi');
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
            'metode_transaksi' => 'required|min:3',
        ]);

       $transaksi = MetodeTransaksi::create($validate);
       $transaksi->save();


        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('metodetransaksi.index');
    

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
    public function edit(MetodeTransaksi $metodetransaksi)
    {

        $metodetransaksi->find($metodetransaksi->id)->all();
        return view ('HelmetCustom.content.Admin.MetodeTransaksi.EditMetodeTransaksi',compact('metodetransaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, MetodeTransaksi $metodetransaksi)
    {
        $validate = $request->validate([
            'metode_transaksi' => 'required|min:3',
        ]);

        $metodetransaksi->update($validate);

        Alert::success('Data Berhasil Di Edit!');
        return redirect()->route('metodetransaksi.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MetodeTransaksi $metodetransaksi)
    {
        $metodetransaksi->delete();

            Alert::success('Data Berhasil Di Delete!');
            return redirect()->route('metodetransaksi.index');
    }
}
