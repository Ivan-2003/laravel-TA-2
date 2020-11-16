<?php

namespace App\Http\Controllers\HelmetCustom\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Carousel;
use Alert;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Carousel::all();
        return view('HelmetCustom.content.Admin.Carousel.index-carousel',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HelmetCustom.content.Admin.Carousel.create-carousel');
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
            'foto_carousel' => 'required|image|mimes:png,jpg,jpeg',
            'caption_satu' => 'required',
            'caption_dua' => 'required'
        ]);

        $image = $request->file('foto_carousel');
        $image->storeAs('public/gallerys',$image->hashName());

        $carousel = Carousel::create([
            'foto_carousel' => $image->hashName(),
            'caption_satu' => $request->caption_satu,
            'caption_dua' => $request->caption_dua,
        ]);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('carousel.index');
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
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();

        Alert::success('Data Berhasil Di Delete!');
        return redirect()->route('carousel.index');
    }
}
