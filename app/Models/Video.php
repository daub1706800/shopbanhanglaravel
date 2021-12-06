<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps=false;
    protected $filltable=['video_title','video_link','video_desc' ];
    protected $primaryKey='video_id';
    protected $table='tbl_videos';
    public function product(){
        return $this->belongsTo('App\Product','brand_id');
    }
}
