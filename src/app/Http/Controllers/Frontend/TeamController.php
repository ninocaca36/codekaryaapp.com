<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::where('is_active', true)->orderBy('order')->get();

        return view('frontend.team.index', compact('teams'));
    }
}
