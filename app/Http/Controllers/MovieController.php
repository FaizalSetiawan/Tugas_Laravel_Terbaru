<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Melihat semua data
    public function getMovie()
    {
        // Melihat semua Data yang ada di dalam model "Movie"
        $movies = Movie::all();
        // Passing data movie ke view "movie.index"
        return view('movie.index', compact('movies'));
    }
    
    // Menampilkan Data Movie Berdasarkan id yang dipilih
    public function getMovieById($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }
}
