<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Group;

class SubGroup extends Model
{

    protected $table = 'sub-groups';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'start_time', 'end_time', 'gender', 'email', 'contact_persoon'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
        
    function getGenderTextAttribute(){
        if($this->gender == 1){
            return 'Gemixd';
        }else if($this->gender == 2){
            return 'Meisjes';
        }else if($this->gender == 3){
            return 'Jongens';
        }else{
            return 'onbekend';
        }
    }

}