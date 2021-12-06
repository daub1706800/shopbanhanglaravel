<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps=false;
    protected $filltable=['category_id','brand_id','product_desc' ,'product_price','product_content','product_images','product_status'];
    protected $primaryKey='product_id';
    protected $table='tbl_product';

    public function category(){
        return $this->belongsTo('App\CategoryProductModel','category_id');
    }
}
