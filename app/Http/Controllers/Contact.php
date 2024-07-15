<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function send(Request $request)
    {
        $data = $request->only('name', 'email', 'subject', 'message', 'phone');

        // Mail::to('souvikbarua693@gmail.com')->send(new TestEmail($data));

        Mail::send('emails.contact', ['data' => $request], function ($m) use ($request) {
            $m->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $m->to(env('MAIL_FROM_ADDRESS'), $request->name)->subject($request->subject);
        });

        return back()->with('success', $data['name'] . ', Message sent successfully!');
    }
}

