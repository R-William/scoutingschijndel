<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Mail\Reservation\ContactRent;
use App\Mail\Reservation\ContactUser;


class Contact extends Model
{  
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'phone', 'organisation', 'comment', 
    ];

    public $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function send(){
        \Mail::to('verhuur@scoutingschijndel.nl')->send(new ContactRent($this));
        \Mail::to($this->email)->send(new ContactUser($this));
    }
}
