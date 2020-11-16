<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function homeadmin(){
        return view('HelmetCustom.content.Admin.DashboardAdmin');
    }
}
