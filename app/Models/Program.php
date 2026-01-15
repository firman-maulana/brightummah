<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'category',
        'name',
        'mode',
        'duration',
        'level',
    ];
}