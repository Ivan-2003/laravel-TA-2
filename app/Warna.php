<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $guarded = []; 

    public function warna_produk(){
        return $this->belongsTo(Produk::class,'warna_produk_id','id');
    }
}
