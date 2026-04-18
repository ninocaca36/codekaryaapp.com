<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendMusicController extends Controller
{
    public function videoSer()
    {
        // Data dummy untuk frontend (bisa diambil dari database nanti)
        $videos = [
            ['title' => 'Eksplorasi Alam', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4', 'author' => 'Kreator A'],
            ['title' => 'Melodi Malam', 'url' => 'https://www.w3schools.com/html/movie.mp4', 'author' => 'Kreator B'],
            ['title' => 'Vlog Perjalanan', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4', 'author' => 'Kreator C'],
        ];

        return view('frontend.music.video-ser', compact('videos'));
    }

    public function karaoke()
    {
        return view('frontend.music.karaoke');
    }
}
