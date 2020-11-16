<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    protected $fillable =[
        'username',
        'email',
        'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function setPasswordAttribute($val){
        return $this->attributes['password'] = bcrypt($val);
    }

    public function CustomerOrder(){
        return $this->hasMany(Order::class, 'email_customer_id', 'id');
    }
    public function cart(){
        return $this->hasMany('App/Cart', 'customer_id', 'id');
    }
    
}
