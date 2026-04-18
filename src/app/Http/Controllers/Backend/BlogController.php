<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->latest()->paginate(10);
        return view('backend.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
            'category' => $request->category,
            'author_id' => Auth::id(),
            'published_at' => now(),
        ]);

        return redirect()->route('blog.index')->with('success', 'Artikel berhasil diterbitkan!');
    }

    public function edit(Post $blog)
    {
        return view('backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, Post $blog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
            'category' => $request->category,
        ]);

        return redirect()->route('blog.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Post $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
