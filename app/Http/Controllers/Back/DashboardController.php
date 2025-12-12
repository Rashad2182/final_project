<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Today's visitors
        $todayVisitors = Visitor::whereDate('created_at', Carbon::today())->count();

        // Yesterday's visitors
        $yesterdayVisitors = Visitor::whereDate('created_at', Carbon::yesterday())->count();

        // Total visitors
        $totalVisitors = Visitor::count();

        // Growth percentage calculation
        if ($yesterdayVisitors > 0) {
            $growthPercentage = (($todayVisitors - $yesterdayVisitors) / $yesterdayVisitors) * 100;
        } else {
            $growthPercentage = $todayVisitors > 0 ? 100 : 0;
        }

        // Progress percentage calculation
        if ($yesterdayVisitors > 0) {
            $progressPercentage = ($todayVisitors / $yesterdayVisitors) * 100;
        } else {
            $progressPercentage = $todayVisitors > 0 ? 100 : 0;
        }

        // Monthly visitors for current year
        $monthlyVisitors = [];
        for ($month = 1; $month <= 12; $month++) {
            $monthlyVisitors[] = Visitor::whereYear('created_at', Carbon::now()->year)
                ->whereMonth('created_at', $month)
                ->count();
        }

        return view('back.pages.dashboard.dashboard', compact(
            'todayVisitors',
            'yesterdayVisitors',
            'totalVisitors',
            'growthPercentage',
            'progressPercentage',
            'monthlyVisitors'
        ));
    }
}
