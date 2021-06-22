<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsType extends Model
{
    protected $fillable = ['type_name'];

    public function product(){
        return $this->hasMany(Product::class,'product_type_id','id');
        //type 關聯 product,關聯的id,自己的id
    }
}
