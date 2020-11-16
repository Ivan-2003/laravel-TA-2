<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerData extends Model
{
    protected $guarded = [];

    public function CustomerDataProvince(){
        return $this->belongsTo(Province::class,'province_id','id');
    }
    public function CustomerDataCity(){
        return $this->belongsTo(City::class,'city_id','id');
    }
    public function CustomerDataKodePos(){
        return $this->belongsTo(KodePos::class,'kode_pos_id','id');
    }

}