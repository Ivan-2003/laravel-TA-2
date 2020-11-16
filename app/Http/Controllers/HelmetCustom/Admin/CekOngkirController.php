<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use App\City;
use App\Province;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CekOngkirController extends Controller
{
    public function index(){
        $provinces = Province::pluck('name','province_id');
        return view('ongkir',compact('provinces'));
    } 
    public function getCities($id){
        $city = City::where('province_id',$id)->pluck('name','city_id');
        return response()->json($city);
    }
    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin' => $request->city_origin, 
            'destination' => $request->city_destination,
            'weight'=> $request->weight,
            'courier' => $request->courier
        ])->get();
        return response()->json($cost);
    }
}
