<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function submit(Request $r){
        $movies = \App\Models\Movie::with('genres', 'reviews')->get();
        return view('movies', compact('movies'));
    }
    public function load($id){
        $movies = \App\Models\Movie::with('reviews')->find($id);
        return view('reviews', compact('movies'));
    }
}
