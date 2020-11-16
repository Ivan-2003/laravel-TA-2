<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];

    public function ProvinceInvoice(){
        return $this->hasMany('invoice::class', 'province_id', 'id');
    }
    public function ProvinceCustomer(){
        return $this->hasMany('CustomerData::class', 'province_id', 'id');
    }
}
