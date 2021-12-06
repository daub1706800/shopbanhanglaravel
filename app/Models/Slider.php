<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $timestamps=false;
    protected $filltable=['slider_name','slider_status','slider_desc' ,'slider_image'];
    protected $primaryKey='sliderid';
    protected $table='tbl_slider';
}
