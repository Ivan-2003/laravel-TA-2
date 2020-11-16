<?php

namespace App\Http\Controllers\HelmetCustom\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginCustomerController extends Controller
{
    public function LoginCustomer(){
        return view('welcomecustomer');
    }
}
