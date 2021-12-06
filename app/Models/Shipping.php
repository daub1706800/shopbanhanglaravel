<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps=false;
    protected $filltable=['shipping_name','shipping_notes','shipping_address' ,'shipping_phone','shipping_email'];
    protected $primaryKey='shipping_id';
    protected $table='tbl_shipping';
    public function product(){
        return $this->belongsTo('App\Product','shipping_id');
    }
}
