<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Jika user memiliki role admin atau superadmin, tampilkan dashboard statistik
        if ($user->hasAnyRole(['admin', 'superadmin'])) {
            return view('backend.index');
        }

        // Jika user biasa, tampilkan dashboard ala Facebook
        return view('backend.user.dashboard');
    }
}
