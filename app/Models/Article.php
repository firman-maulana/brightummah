<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'thumbnail',
        'hashtags',
        'content',
        'has_photo',
        'likes_count'
    ];

    protected $casts = [
        'hashtags' => 'array',
        'content' => 'array',
        'has_photo' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getThumbnailUrlAttribute()
    {
        if (!$this->thumbnail) {
            return null;
        }

        if (str_starts_with($this->thumbnail, 'http://') || str_starts_with($this->thumbnail, 'https://')) {
            return $this->thumbnail;
        }

        return Storage::url($this->thumbnail);
    }
}
