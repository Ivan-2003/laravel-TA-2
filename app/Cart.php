<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id','id');
    }
    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id','id');
    }
}
