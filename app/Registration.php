<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Mail\Registration\RegistrationGroup;
use App\Mail\Registration\RegistrationUser;

class Registration extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'gender', 'name', 'email', 'phone', 'geb_date', 'comment', 'sub_date', 'group'
    ];

    protected $casts = [
        'geb_date' => 'datetime',
        'sub_date' => 'datetime',
    ];

    public $rules = [
        'gender' => 'required|in:women,male',
        'name' => 'required',
        'email' => 'required|email',
        'geb_date' => 'required',
    ];

    public function __construct(array $attributes = [])
    {
        $this->sub_date = Carbon::now();
        parent::__construct($attributes);
    }

    function getGenderAttribute(){
        $age = Carbon::parse($this->geb_date)->diff(Carbon::now())->y;
        if($this->gender = 'male'){
            return $age < 17 ? 'jongen':'man';
        }else if($this->gender = 'women'){
            return $age < 17 ? 'meisje':'vrouw';
        }else{
            return 'onbekend';
        }
    }
    
    public function sub_group(){
        return $this->hasOne(SubGroup::class, 'id', 'group');
    }

    public function send(){
        \Mail::to($this->sub_group()->first()->email)->send(new RegistrationGroup($this));
        \Mail::to($this->email)->send(new RegistrationUser($this));
    }

}
