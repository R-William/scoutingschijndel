<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Slider;

class GroupSlider extends Model
{

    protected $table = 'group_slider';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'group_id', 'slider_id', 'order'
    ];

    public function sliders(){
        return $this->hasMany( SubGroup::class, 'slider_id', 'id');
    }

}