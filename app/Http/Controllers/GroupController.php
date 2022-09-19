<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use View;
use App\Group;
use App\Slider;

class GroupController extends Controller
{
    function group($group){
        $this->layout = View::make('pages/group');
        $this->layout->title = "Scouting Schijndel - ".$group;
        $group = Group::with('sub_groups')->where('name', '=', Str::lower($group))->firstOrFail();
        $this->layout->group = $group; 
        $this->layout->sliders = $group->slider()->get();
        return $this->layout;
    }
}
