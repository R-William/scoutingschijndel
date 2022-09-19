<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Reservation;
use App\Contact;
use Illuminate\Http\Request;
use App\Slider;
use View;

class RentController extends Controller
{
    function building(){
        $this->layout = View::make('pages/rent/building');
        $this->layout->title = "Scouting Schijndel - Gebouw";
        
        #TODO
        $sliders = [];
        $slider = new Slider();
        $slider->image_location = 'http://www.scoutingschijndel.nl/content/illustrations/verkenners.jpg';
        $slider->slider_name = 'Lokaal 2';
        $slider->order_list = 0;

        $slider1 = new Slider();
        $slider1->image_location = 'http://www.scoutingschijndel.nl/content/illustrations/buiten.jpg';
        $slider1->slider_name = 'Buiten';
        $slider1->order_list = 1;
        
        $slider2 = new Slider();
        $slider2->image_location = 'http://www.scoutingschijndel.nl/content/illustrations/verkenners.jpg';
        $slider2->slider_name = 'Lokaal 2';
        $slider2->order_list = 2;
        
        $slider3 = new Slider();
        $slider3->image_location = 'http://www.scoutingschijndel.nl/content/illustrations/verkenners.jpg';
        $slider3->slider_name = 'Buiten';
        $slider3->order_list = 3;
        array_push($sliders, $slider, $slider1, $slider2, $slider3);
        $this->layout->sliders = $sliders;

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
            $contact->send();
        }
        if(isset($request->book_form)){
            $reservation = new Reservation($request->all());
            $validator = Validator::make($request->all(), $reservation->rules);
            
            if($validator->fails()){
                return $validator;
            }

            $this->layout->reservation = $reservation;
            $reservation->send();
        }
        
        $this->layout->request = $request;

        return $this->layout;       

    }
}
