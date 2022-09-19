<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Slider;

class IndexController extends Controller
{
    function home(){
        $this->layout = View::make('pages/home');
        $this->layout->title = "Scouting Schijndel";

        #TODO
        $sliders = [];
        $slider = new Slider();
        $slider->image_location = 'images/groups/bevers/Zomerkamp Bevers 2017 (13).JPG';
        $slider->display_title = 'Bevers';
        $slider->order_list = 0;

        $slider1 = new Slider();
        $slider1->image_location = 'images/groups/welpen/zomerkamp-welpenmeiden-2017.JPG';
        $slider1->display_title = 'Welpen';
        $slider1->order_list = 1;
        
        $slider2 = new Slider();
        $slider2->image_location = 'images/groups/scouts/gidsen-groep-2.JPG';
        $slider2->display_title = 'Scouts';
        $slider2->order_list = 2;
        array_push($sliders, $slider, $slider1, $slider2);
        $this->layout->sliders = $sliders;
        return $this->layout;
    }

    function actie(){
        $this->layout = View::make('pages/actie');
        $this->layout->title = "Scouting Schijndel - Actie";
        return $this->layout;       
    }

    function news(){
        $this->layout = View::make('pages/news');
        $this->layout->title = "Scouting Schijndel - Nieuws";
        return $this->layout;       
    }
}
