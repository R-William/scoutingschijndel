<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use View;
use App\SubGroup;
use App\Group;
use App\Jobs\MailRegistration;
use App\Registration;

class RegisterController extends Controller
{
    function registerView($selectedGroup = null){
        $this->layout = View::make('pages/register');
        $this->layout->title = "Inschrijven - Scouting Schijndel";
        $this->layout->selectedGroup = $selectedGroup;

        if($selectedGroup != null){
            $group = Group::where('name', $selectedGroup)->first();
            $subGroups = $group->sub_groups()->get();
            $this->layout->group = $group;
        } else {
            $subGroups = SubGroup::orderBy('id')-> get();
        }
        $this->layout->subgroups = $subGroups;


        return $this->layout;
    }
    
    function registerPost(Request $request){
        $this->layout = View::make('pages/register-thanks');
        $this->layout->title = "Bedankt - Scouting Schijndel";
        
        $registration = new Registration($request->all());

        $validator = Validator::make($request->all(), $registration->rules);
        
        if($validator->fails()){
            return $validator;
        }
        $registration->save();;

        $this->layout->registration = $registration;
        $this->layout->sliders = $registration->sub_group->group->slider()->get();
        $job = (new MailRegistration($registration));

        $this->dispatch($job);
        return $this->layout;
    }
}
