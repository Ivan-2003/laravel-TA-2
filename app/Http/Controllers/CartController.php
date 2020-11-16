<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Produk;
use App\Customer;
use App\footer;
use Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }
    public function index(){
        // cart ada ? 1 where => user = 1 => aji = tampilkan
        $footer = footer::all();
        $carts = Cart::where('customer_id',Auth::user()->id)->get();
        return view('HelmetCustom.content.Customer.Cart.index',compact('carts','footer'));
    }
    public function store(Request $request, $id){
        $duplicate = Cart::where('produk_id', $request->id)->first();

        if($duplicate){
            return redirect('/helmetcustom/cart')->with('error','Barang sudah ada di cart');
        }

        $product = Produk::find($id);
        Cart::create([
            'customer_id' => Auth::user()->id,
            'produk_id' => $product->id,
            'qty' => 1
        ]);
        return redirect('/helmetcustom/cart')->with('success','Barang Berhasil ditambahkan');
    }

    public function update(Request $request, $id){
        Cart::where('id',$id)->update([
            'qty' => $request->quantity
        ]);
        return response()->json([
            'success' => true
        ]);
    }
}
