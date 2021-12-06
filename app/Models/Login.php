<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps=false;
    protected $filltable=['admin_name','admin_password','admin_name','admin_phone' ];
    protected $primaryKey='admin_id';
    protected $table='tbl_admin';
    
}
