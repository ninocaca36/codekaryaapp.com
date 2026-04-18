<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPodcastController extends Controller
{
    public function index()
    {
        // Data dummy untuk podcast
        $podcasts = [
            [
                'id' => 1,
                'title' => 'Codekarya Live Talk: Masa Depan AI',
                'author' => 'Andi Wijaya',
                'views' => '1.2K',
                'time' => 'Sedang Live',
                'is_live' => true,
                'thumbnail' => 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?q=80&w=800&auto=format&fit=crop'
            ],
            [
                'id' => 2,
                'title' => 'Belajar Laravel dalam 10 Menit',
                'author' => 'Budi Santoso',
                'views' => '5.4K',
                'time' => '2 jam yang lalu',
                'is_live' => false,
                'thumbnail' => 'https://images.unsplash.com/photo-1589903308914-27d0467594df?q=80&w=800&auto=format&fit=crop'
            ],
            [
                'id' => 3,
                'title' => 'Tips Menjadi Freelancer Sukses',
                'author' => 'Citra Lestari',
                'views' => '890',
                'time' => '1 hari yang lalu',
                'is_live' => false,
                'thumbnail' => 'https://images.unsplash.com/photo-1478737270239-2fccd2c7fd91?q=80&w=800&auto=format&fit=crop'
            ],
            [
                'id' => 4,
                'title' => 'Podcast Malam: Horor Digital',
                'author' => 'Deni Darmawan',
                'views' => '12K',
                'time' => 'Sedang Live',
                'is_live' => true,
                'thumbnail' => 'https://images.unsplash.com/photo-1571235962067-15c016140ee4?q=80&w=800&auto=format&fit=crop'
            ],
        ];

        return view('frontend.podcast.index', compact('podcasts'));
    }
}
