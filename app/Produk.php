<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = [];

    public function ProdukWarna(){
        return $this->belongsTo(Warna::class,'warna_produk_id','id');
    }
    public function ProdukStatus(){
        return $this->belongsTo(StatusProduk::class, 'status_produk_id','id');
    }
    public function ProdukOrder(){
        return $this->hasMany(Order::class, 'produk_id','id');
    }
    public function cart(){
        return $this->hasMany(Cart::class, 'produk_id','id');
    }
}
