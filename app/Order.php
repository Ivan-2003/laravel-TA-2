<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   
    protected $guarded = [];

    public function OrderCustomer(){
        return $this->hasOne(Customer::class, 'email_customer_id', 'id');
    }
    public function OrderProduk(){
        return $this->hasMany(Produk::class, 'produk_id', 'id');
    }
}
