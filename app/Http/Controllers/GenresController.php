<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenresController extends Controller
{
    public function submit($id)
    {
        $genres = \App\Models\Genre::with('movies')->find($id);
        return view('genre', compact('genres'));
    }
}
