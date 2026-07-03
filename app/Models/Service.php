<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'icon', 'description', 'sub_items', 'image', 'sort_order', 'is_active'];
    protected $casts    = ['sub_items' => 'array', 'is_active' => 'boolean'];

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }
}
