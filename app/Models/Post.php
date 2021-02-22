<?php

namespace App\Models;

class Post extends Model
{
    public function scopePublished($query)
    {
        return $query->where('created_at', '!=', null);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
