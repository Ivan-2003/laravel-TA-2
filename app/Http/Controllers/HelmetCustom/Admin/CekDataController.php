<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\city;
use App\province;

class CekDataController extends Controller
{
    public function city(){
        return City::all();
    }

    public function province(){
        return Province::all();
    }
}
