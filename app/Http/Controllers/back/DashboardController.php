<?php

namespace App\Http\Controllers\back;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $today = Visitor::whereDate('created_at', today())->count();

        $last7 = Visitor::where('created_at', '>=', now()->subDays(30))->count();

        $topPages = Visitor::select('device', DB::raw('count(*) as total'))
            ->groupBy('visitors.ip_address')
            ->orderByDesc('total')
            ->get();

        view('back.pages.dashboard.dashboard', compact('today', 'last7', 'topPages'));
    }
}
