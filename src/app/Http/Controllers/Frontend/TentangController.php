<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        return view('frontend.tentang-kami.index');
    }

    public function show($slug)
    {
        return view('frontend.tentang-kami.show', compact('slug'));
    }
}