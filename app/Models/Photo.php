<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $upload = '/images/';

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function getPathAttribute($photo)
    {
        return $this->upload . $photo;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
