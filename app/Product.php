<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name','product_price','descript','product_type_id','main_photo'];

    public function type(){
        return $this->hasOne(ProductsType::class,'id','product_type_id');
    }

    public function img(){
        return $this->hasMany(ProductImg::class,'product_id','id');
    }
}


