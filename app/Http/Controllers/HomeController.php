<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // 'select * from books'
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
}
