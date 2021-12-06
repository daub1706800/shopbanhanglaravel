<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps=false;
    protected $filltable=['brand_name','brand_status','brand_desc' ];
    protected $primaryKey='brand_id';
    protected $table='tbl_brand';
    public function product(){
        return $this->belongsTo('App\Product','brand_id');
    }
}
