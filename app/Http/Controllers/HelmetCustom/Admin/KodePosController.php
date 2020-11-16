<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KodePos;
use Alert;

class KodePosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodepos = KodePos::all();
        return view('HelmetCustom.content.Admin.Kodepos.IndexKodePos',compact('kodepos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HelmetCustom.content.Admin.Kodepos.IndexKodePos');
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
            'kode_pos' => 'required'
        ]);
        
        $kodepos = new KodePos;
        $kodepos->kode_pos = $validate['kode_pos'];
        $kodepos->save();
        
        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('kodepos.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KodePos $kodepos)
    {
        $kodepos->delete();

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('kodepos.index');
    }
}
