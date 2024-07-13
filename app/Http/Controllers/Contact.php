<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function send(Request $request){
        $data = $request->all();
        dd($data);
    }
}
