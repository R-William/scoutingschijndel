<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\SubGroup;
use Illuminate\Support\Str;

class Actie extends Model
{

    protected $table = 'acties';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'text', 'img', 'actif', 'home_page', 'order_row'
    ];


    public function sub_groups(){
        return $this->hasMany(SubGroup::class, 'group_id', 'id')->orderBy('id');
    }

}