<?php

namespace App\Http\Controllers;

use App\Models\Package as ModelsPackage;
use Illuminate\Http\Request;

class Package extends Controller
{
    public function index($id){
        $package = ModelsPackage::find($id);
        return view('Package',['package'=>$package]);
    }
}
