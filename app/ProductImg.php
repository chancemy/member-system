<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    protected $fillable = ['photo','product_id','created_at','updated_at'];

    public function productImg(){
        return $this->hasOne(Product::class);
    }
}


