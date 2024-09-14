<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Slider;
use App\Actie;

class IndexController extends Controller
{
    function home(){
        $this->layout = View::make('pages/home');
        $this->layout->title = "Scouting Schijndel";

        $sliders = Slider::where('slider_name','home-page')->get();
        $this->layout->sliders = $sliders;
        $this->layout->acties = Actie::where('actif', 1)->where('home_page', 1)->get();
        return $this->layout;
    }

    function actie(){
        $this->layout = View::make('pages/actie');
        $this->layout->title = "Scouting Schijndel - Actie";

        $this->layout->acties = Actie::where('actif', 1)->get();
        return $this->layout;    
    }

    function news(){
        $this->layout = View::make('pages/news');
        $this->layout->title = "Scouting Schijndel - Nieuws";
        return $this->layout;       
    }
}
