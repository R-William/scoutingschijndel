<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Mail\Reservation\ReservationRent;
use App\Mail\Reservation\ReservationUser;

class Reservation extends Model
{
    
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'phone', 'organisation', 'amount', 'comment', 'start_date', 'end_date'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'organisation' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'amount' => 'required'
    ];
}
