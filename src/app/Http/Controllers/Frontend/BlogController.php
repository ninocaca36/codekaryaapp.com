<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->latest()->paginate(9);
        return view('frontend.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::with('author')->where('slug', $slug)->firstOrFail();
        return view('frontend.blog.show', compact('post'));
    }
}
