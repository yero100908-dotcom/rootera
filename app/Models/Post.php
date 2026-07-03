<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'thumbnail', 'excerpt', 'content',
        'author', 'category', 'is_published', 'published_at',
    ];
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderByDesc('published_at');
    }
}
