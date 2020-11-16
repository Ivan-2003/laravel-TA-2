<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Footer;

class CustomerLoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = '/helmetcustom/homehelmet';   

    public function __construct(){
        $this->middleware('guest:customer')->except('logout')->except('index');
    }

    public function index(){
        $footer = Footer::all();
        return view('customer.content.home', compact('footer'));
    }

    public function showLoginForm()
    {
        $footer = Footer::all();
        return view('auth.customerlogin', compact('footer'));
    }

    public function showRegisterForm(){
        $footer = Footer::all();
        return view('auth.customerregister', compact('footer'));
    }

    public function username()
    {
        return 'username';
    }

    public function guard()
    {
        return Auth::guard('customer');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username'  => 'required|string|unique:customers',
            'email'     => 'required|string|email|unique:customers',
            'password'  => 'required|string|min:6|confirmed'
        ]);
        \App\Customer::create($request->all());
        return redirect()->route('customer.loginform')->with('success','Successfully register!');
    }
    public function logout(){
        Auth::logout();
        return redirect('/customer'); // ini untuk redirect setelah logout
    }
}
