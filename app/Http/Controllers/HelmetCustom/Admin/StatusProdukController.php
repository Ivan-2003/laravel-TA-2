<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StatusProduk;
use Session;
use Alert;

class StatusProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StatusProduk::all();
        return view ('HelmetCustom.content.Admin.Status.IndexStatus',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('HelmetCustom.content.Admin.Status.CreateStatus');
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
            'status_produk' => 'required|min:2',
        ]);
        $status = StatusProduk::create($validate);
        $status->save();

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('status.index');
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
    public function edit(StatusProduk $status)
    {
        return view('HelmetCustom.content.Admin.Status.EditStatus', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusProduk $status)
    {
        $validate = $request->validate([
            'status_produk' => 'required|min:2',
        ]);
        $status->update($validate);

        Alert::success('Data Berhasil Di Edit!');
        return redirect()->route('status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = StatusProduk::find($id);
        $status->delete();

        Alert::success('Data Berhasil Di Delete!');
        return redirect()->route('status.index');
        
    }
}
