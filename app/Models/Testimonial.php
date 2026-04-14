<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
    
    public function getPhotoUrlAttribute()
    {
        if (!$this->photo) {
            return null;
        }

        if (str_starts_with($this->photo, 'http://') || str_starts_with($this->photo, 'https://')) {
            return $this->photo;
        }

        // Use asset() instead of Storage::url() to avoid finfo dependency
        return asset('storage/' . $this->photo);
    }
}