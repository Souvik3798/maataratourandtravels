<?php

namespace App\Http\Controllers;

use App\Models\Hotel as ModelsHotel;
use Illuminate\Http\Request;

class Hotel extends Controller
{
    public function index($id){
        $hotel = ModelsHotel::find($id);
        return view('Hotel',['hotel'=>$hotel]);
    }
}
