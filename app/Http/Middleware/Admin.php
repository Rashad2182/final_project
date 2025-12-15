<?php

namespace App\Http\Middleware;

use App\Models\Roles;
use Closure;
use Couchbase\Role;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role()->id === 'admin') {
           return redirect()->route('dashboard');
        } elseif (auth()->check() && auth()->user()->role()->id === user) {
            return redirect()->route('front.home');
        } else {
            return $next($request);
        }

    }
}
