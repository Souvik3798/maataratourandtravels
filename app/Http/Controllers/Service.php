<?php

namespace App\Http\Controllers;

use App\Models\Service as ModelsService;
use Illuminate\Http\Request;

class Service extends Controller
{
    public function index(){
        $services = ModelsService::all();
        return view('service',['services'=>$services]);
    }

    public function details($id){
        $details = ModelsService::find($id);
        return view('ServiceDetail',['details'=>$details]);
    }
}
