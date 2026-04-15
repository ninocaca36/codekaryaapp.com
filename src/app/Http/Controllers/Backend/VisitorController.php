<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Shetabit\Visitor\Models\Visit;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VisitorController extends Controller
{
    public function index()
    {
        // Total visits
        $totalVisits = Visit::count();

        // Today's visits
        $todayVisits = Visit::whereDate('created_at', Carbon::today())->count();

        // This month's visits
        $monthVisits = Visit::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        // Unique visitors (by IP)
        $uniqueVisitors = Visit::distinct('ip')->count('ip');

        // Visits per day (last 14 days)
        $dailyVisits = Visit::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('COUNT(*) as total')
            )
            ->where('created_at', '>=', Carbon::now()->subDays(14))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Top browsers
        $browsers = Visit::select('browser', DB::raw('COUNT(*) as total'))
            ->whereNotNull('browser')
            ->groupBy('browser')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        // Top platforms / OS
        $platforms = Visit::select('platform', DB::raw('COUNT(*) as total'))
            ->whereNotNull('platform')
            ->groupBy('platform')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        // Top devices
        $devices = Visit::select('device', DB::raw('COUNT(*) as total'))
            ->whereNotNull('device')
            ->groupBy('device')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        // Top pages
        $topPages = Visit::select('url', DB::raw('COUNT(*) as total'))
            ->whereNotNull('url')
            ->groupBy('url')
            ->orderByDesc('total')
            ->limit(10)
            ->get();

        // Recent visitors (last 20)
        $recentVisits = Visit::orderByDesc('created_at')->limit(20)->get();

        return view('backend.visitors.index', compact(
            'totalVisits', 'todayVisits', 'monthVisits', 'uniqueVisitors',
            'dailyVisits', 'browsers', 'platforms', 'devices', 'topPages', 'recentVisits'
        ));
    }
}
