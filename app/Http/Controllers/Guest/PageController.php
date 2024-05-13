<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movies()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function topFilm()
    {
        $movies = Movie::where('vote', '>=', 9)
            ->orderBy('title')
            ->get();
        return view('topFilm', compact('movies'));
    }

    public function detailMovie($id)
    {

        $movie = Movie::find($id);
        return view('detailMovie', compact('movie'));
    }
}
