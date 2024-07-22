<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'Image',
        'Name',
        'destination covered',
        'destination details',
        'Description',
        'Price',
        'Inclusions',
        'Exclusions',
        'Hotel',
        'location',
        'Type',
        'Itinerary',
    ];

    protected $casts = [
        'Itinerary' => 'array',
        'Inclusions' => 'array',
        'Exclusions' => 'array',
        'location' => 'array'
    ];
}
