<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function customers(){
        // RELACAO COM A CUSTOMER 1-PASSO
        return $this->hasMany(Customer::class);
    }
}
