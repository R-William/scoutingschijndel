<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    protected $table = 'slider';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slider_name', 'image_location', 'order_list', 'display_title'
    ];
}