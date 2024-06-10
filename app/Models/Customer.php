<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToMany('App\Models\Product'); //muchos a muchos belongsToMany   //hasOne 1 a 1   --- has many uno a muchos
    }
}
