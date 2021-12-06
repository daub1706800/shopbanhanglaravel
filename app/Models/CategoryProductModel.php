<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProductModel extends Model
{
    public $timestamps=false;
    protected $filltable=['category_name','category_status','category_desc'];
    protected $primaryKey='category_id';
    protected $table='tbl_category_product';

    public function product(){
        return $this->hasMany('App\Product');
    }
}
