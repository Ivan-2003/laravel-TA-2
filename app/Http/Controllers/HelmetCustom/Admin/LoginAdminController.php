<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function LoginAdmin(){
        return view('welcomeadmin');
    }
}
