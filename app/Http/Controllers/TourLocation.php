<?php

namespace App\Http\Controllers;

use App\Models\TourLocation as ModelsTourLocation;
use Illuminate\Http\Request;

class TourLocation extends Controller
{
    public function index($id){
        $location = ModelsTourLocation::find($id);
        return view('TourLocation',['location'=>$location]);
    }
}
