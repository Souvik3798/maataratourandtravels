<?php

namespace App\Http\Controllers;

use App\Models\Activity as ModelsActivity;
use Illuminate\Http\Request;

class Activity extends Controller
{
    public function index($id){
        $activity = ModelsActivity::find($id);
        return view('Activity',['activity'=>$activity]);
    }
}
