<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'thumbnail',
        'hashtags',
        'content',
        'has_photo'
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
}
