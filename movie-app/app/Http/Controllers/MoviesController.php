<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        // ELOQUENT
      /*   $movies = Movies::get();
        return view('movies', ['movies' => $movies]); */
        return view("movies.index");
    }

    public function movie(Movies $movie)
    {
        $movie = Movies::findorFail($movie->id);
        return view('movie', ['movie'=> $movie]);
    }

    public function allMoviesAPI(){
        $movies = Movies::all(); /* SELECT * FROM movies; */
        return response()->json($movies);
    }
}
