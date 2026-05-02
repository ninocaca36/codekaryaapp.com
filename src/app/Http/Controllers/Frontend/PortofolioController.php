<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $portfolios = \App\Models\Portfolio::where('is_active', true)->orderBy('order')->get();
        $settings = \App\Models\WebSetting::all()->pluck('value', 'key');
        
        return view('frontend.portofolio.index', compact('portfolios', 'settings'));
    }
}
