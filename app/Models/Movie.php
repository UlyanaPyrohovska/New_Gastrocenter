<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function reviews()
    {
        return $this->hasMany('App\Models\Review','movie_id', 'id');
    }
    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre', 'movies_genres', 'movie_id', 'genre_id');
    }
}
