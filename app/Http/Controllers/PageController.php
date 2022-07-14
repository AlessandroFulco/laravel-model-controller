<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class PageController extends Controller
{
    public function index() {
        $data = [
            'title' => 'HomePage',
            'movies' => Movie::all()
        ];
        return view('home', $data);
    }
}
