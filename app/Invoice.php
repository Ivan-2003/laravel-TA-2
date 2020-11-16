<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = [];

    public function InvoiceProvince(){
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    public function InvoiceCity(){
        return $this->belongsTo(city::class, 'city_id', 'id');
    }

    public function InvoiceKodepos(){
        return $this->belongsTo(KodePos::class, 'kode_pos_id', 'id');
    }
}
