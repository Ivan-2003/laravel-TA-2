<?php

namespace App\Http\Controllers\HelmetCustom\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Province;
use App\City;
use App\Invoice;
use App\KodePos;
use Alert;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = Invoice::all();
        return view('HelmetCustom.content.Customer.invoice.index',compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kodepos = KodePos::all();
        $province = Province::all();
        $city = City::all();
        return view('HelmetCustom.content.Customer.invoice.create', compact('kodepos', 'province', 'city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'email_customer' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'kode_pos' => 'required',
            'order_id' => 'required',
            'total_harga' => 'required'
            
        ]);

        $invoice = Invoice::create($validasi);
        $invoice->save();

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('invoice.index');
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
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        Alert::success('Data Berhasil Di Delete!');
        return redirect()->route('invoice.index');
    }
}
