<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodeTransaksi extends Model
{
    protected $guarded = [];

    public function metode_transaksi(){
        return $this->hasMany(Order::class, 'transaksi_id','id');
    }
}
