<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use View;

class AboutController extends Controller
{
    function general(){
        $this->layout = View::make('pages/about/general');
        $this->layout->title = "Scouting Schijndel - Algemeen";
        
        #TODO
        $sliders = Slider::where('slider_name','general_organisation')->get();
        $this->layout->sliders = $sliders;
        return $this->layout;        
    }

    function contact(){
        $this->layout = View::make('pages/about/contact');
        $this->layout->title = "Scouting Schijndel - Contact";
        return $this->layout;
    }

    function register_costs(){
        $this->layout = View::make('pages/about/register_costs');
        $this->layout->title = "Scouting Schijndel - Kosten";
        return $this->layout;
    }
}
