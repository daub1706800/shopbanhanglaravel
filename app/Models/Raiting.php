<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raiting extends Model
{
    public $timestamps=false;
    protected $filltable=['product_id','raiting' ];
    protected $primaryKey='raiting_id';
    protected $table='tbl_raiting';

}
