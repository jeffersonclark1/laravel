<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

//    protected $fillable = ['name', 'email', 'active'];

    protected $guarded = [];

    protected $attributes = [
        'active' => 1
    ];

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function company(){
        // RELACAO COM A COMPANY 2-PASSO
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-Progress'
        ];
    }
}
