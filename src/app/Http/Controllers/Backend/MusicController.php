<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        // Data dummy untuk video ser/pendek
        $videos = [
            ['title' => 'Karya Kreatif 1', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4', 'author' => 'Andi'],
            ['title' => 'Musik Santai', 'url' => 'https://www.w3schools.com/html/movie.mp4', 'author' => 'Budi'],
            ['title' => 'Inspirasi Pagi', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4', 'author' => 'Citra'],
        ];

        return view('backend.music.index', compact('videos'));
    }

    public function karaoke()
    {
        return view('backend.music.karaoke');
    }
}
