<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Reservation;
use App\Contact;
use App\Jobs\MailRentContact;
use App\Jobs\MailRentReservation;
use Illuminate\Http\Request;
use App\Slider;
use View;

class RentController extends Controller
{
    function building(){
        $this->layout = View::make('pages/rent/building');
        $this->layout->title = "Scouting Schijndel - Gebouw";

        return $this->layout;
    }

    function surrounding(){
        $this->layout = View::make('pages/rent/surrounding');
        $this->layout->title = "Scouting Schijndel - Omgeving";
        return $this->layout;
    }

    function prices_conditions(){
        $this->layout = View::make('pages/rent/price_conditions');
        $this->layout->title = "Scouting Schijndel - Prijzen & Voorwaarden";
        return $this->layout;
    }

    function calender(){
        $this->layout = View::make('pages/rent/calender');
        $this->layout->title = "Scouting Schijndel - Calender";
        return $this->layout;
    }

    function book(Request $request){
        $this->layout = View::make('pages/rent/calender-thanks');
        $this->layout->title = "Bedankt - Scouting Schijndel";

        $validator = '';
        if(isset($request->contact_form)){
            $contact = new Contact($request->all());
            $validator = Validator::make($request->all(), $contact->rules);

            if($validator->fails()){
                return $validator;
            }
            
            $this->layout->contact = $contact;
            $contact->save();

            $job = (new MailRentContact($contact));
            $this->dispatch($job);
        }
        if(isset($request->book_form)){
            $reservation = new Reservation($request->all());
            $validator = Validator::make($request->all(), $reservation->rules);
            
            if($validator->fails()){
                return $validator;
            }

            $this->layout->reservation = $reservation;
            $reservation->save();
            
            $job = (new MailRentReservation($contact));
            $this->dispatch($job);
        }
        
        $this->layout->request = $request;

        return $this->layout;       

    }
}
