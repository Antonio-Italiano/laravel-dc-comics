<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function characters()
    {
        return view('characters');
    }

    public function comics(Request $request)
    {
        $query = Comic::query();
        $comics = $query->get();
        return view('comics', compact('comics'));
    }

    public function movies()
    {
        return view('movies');
    }
    
    public function tv()
    {
        return view('tv');
    }

    public function games()
    {
        return view('games');
    }

    public function collectibles()
    {
        return view('collectibles');
    }

    public function videos()
    {
        return view('videos');
    }

    public function fans()
    {
        return view('fans');
    }

    public function news()
    {
        return view('news');
    }

    public function shop()
    {
        return view('shop');
    }
}
