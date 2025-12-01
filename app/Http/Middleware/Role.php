<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    private Role $role;
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Əgər istifadəçi login olmayıbsa -> login səhifəsinə
        if (!\Auth::check()) {
            return redirect()->route('login');
        }

        // Əgər admin-dirsə -> admin dashboard

if (auth()->user()->role() === 'admin') {
    return redirect()->route('admin.dashboard');
}


        // Əgər normal user-dirsə -> front page

if (auth()->user()->role() === 'user') {
    return redirect()->route('front.home');
}



        // Default olaraq davam et
        return $next($request);
    }
}
