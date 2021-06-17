<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsType extends Model
{
    protected $fillable = ['type_name'];

    public function products(){
        $this->hasMany(Product::class);
    }
}
