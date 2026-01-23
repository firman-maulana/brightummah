<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'category',
        'name',
        'mode',
        'level',
        'price',
        'price_period',
        'image',
        'teacher',
        'tujuan_program',
        'fokus_pembelajaran',
        'manfaat_program',
    ];
}