<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function customers(){
        return $this->belongsToMany('App\Models\Customer'); //muchos a muchos belongsToMany   //hasOne 1 a 1   --- has many uno a muchos
    }

    public function suppliers(){
        return $this->hasMany('App\Models\Supplier');
    }
}
