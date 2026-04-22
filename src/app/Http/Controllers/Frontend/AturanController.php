<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AturanController extends Controller
{
    public function index()
    {
        return view('frontend.aturan.index');
    }

    public function web()
    {
        return view('frontend.aturan.web');
    }

    public function show($slug)
    {
        $post = Post::with('author')->where('slug', $slug)->firstOrFail();
        return view('frontend.aturan.show', compact('post'));
    }
}
