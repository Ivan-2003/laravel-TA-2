<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodePos extends Model
{
    protected $guarded = [];

    public function kodepos(){
        return $this->hasMany(Invoice::class, 'kode_pos_id', 'id');
    }
}
