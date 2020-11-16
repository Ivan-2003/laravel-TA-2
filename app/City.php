<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function CityInvoice(){
        return $this->hasMany('Invoice::class', 'city_id', 'id');
    }
    public function CityCustomer(){
        return $this->hasMany('CustomerData::class', 'city_id', 'id');
    }

}
