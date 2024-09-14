<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use View;
use App\Group;
use App\Slider;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    function group($group_name){
        $this->layout = View::make('pages/group');
        $this->layout->title = "Scouting Schijndel - ".$group_name;
        $group = Group::with('sub_groups')->where('name', '=', Str::lower($group_name))->firstOrFail();
        $this->layout->group = $group; 
        $this->layout->sliders = $group->slider()->get();
        $sub_groupids = [];
        
        $this->layout->acties = DB::table('acties')
                    ->leftJoin('group_actions', 'group_actions.actie_id', 'acties.id')
                    ->leftJoin('sub-groups', 'sub-groups.id', 'group_actions.group_id')
                    ->where('sub-groups.group_id', '=', $group->id)
                    ->where('acties.actif', '=', '1' )
                    ->select('acties.*')
                    ->get();
        return $this->layout;
    }
}
