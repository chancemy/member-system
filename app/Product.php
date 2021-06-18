<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name','product_price','descript','product_type_id'];

    public function type(){
        return $this->belongsTo(ProductsType::class,'product_type_id');
    }

    public function img(){
        return $this->hasMany(ProductImg::class,'product_id');
    }
}


