<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\SubGroup;
use Illuminate\Support\Str;
use App\Actie;

class Group extends Model
{

    protected $table = 'groups';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'age-min', 'age-max'
    ];


    public function sub_groups(){
        return $this->hasMany(SubGroup::class, 'group_id', 'id')->orderBy('id');
    }

    public function slider(){
        return Slider::where('slider_name', Str::lower($this->name))->orderBy('order_list');
    }

    public function acties(){
        $acties = SubGroup::with('acties')->select('acties.*')->where('subgroup.id', $this->id);
        return $acties;
    }

}