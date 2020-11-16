<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusProduk extends Model
{
    protected $guarded = [];

    public function StatusProduk(){
        return $this->hasMany(Produk::class, 'status_produk_id','id');
    }
}
