<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\footer;
use Alert;

use function Ramsey\Uuid\v1;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = footer::all();
        return view('HelmetCustom.content.Admin.footer.index-footer',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HelmetCustom.content.Admin.footer.create-footer');
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
            'about_us' => 'required',
            'contact' => 'required',
            'support' => 'required'
        ]);

        $footer = new footer;
        $footer->about_us = $validate ['about_us'];
        $footer->contact = $validate ['contact'];
        $footer->support = $validate ['support'];
        $footer->save();

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('footer');
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
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(footer $footer)
    {
        $footer->delete();

        Alert::success('Data Berhasil Di Delete!');
        return redirect()->route('footer');
    }
}
