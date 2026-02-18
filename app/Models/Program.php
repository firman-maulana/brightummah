<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'user_id',
        'category',
        'name',
        'mode',
        'level',
        'image',
        'teacher',
        'tujuan_program',
        'fokus_pembelajaran',
        'manfaat_program',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}