<?php

use App\Http\Controllers\Activity;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Hotel;
use App\Http\Controllers\Package;
use App\Http\Controllers\Service;
use App\Http\Controllers\TourLocation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return view('paymentpending');
});
Route::get('location/{id}',[TourLocation::class,'index']);
Route::get('package/{id}',[Package::class,'index']);
Route::get('activity/{id}',[Activity::class,'index']);
Route::get('hotel/{id}',[Hotel::class,'index']);
Route::get('service/',[Service::class,'index']);
Route::get('service-details/{id}',[Service::class,'details']);
Route::get('about/', function () {
    return view('About');
});
Route::get('contact/', function () {
    return view('Contact');
});

Route::post('send/',[Contact::class,'send']);
