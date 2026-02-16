<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'institute',
        'country',
        'message',
        'date',
        'photo',
        'status',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
