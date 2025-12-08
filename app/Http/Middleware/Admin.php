<?php

namespace App\Http\Middleware;

use Closure;
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

        if (auth()->check() && auth()->user()->role() === 'user') {
            redirect('/');
        }elseif(auth()->check() && auth()->user()->role() === 'admin'){
            redirect('/admin/dashboard');
        }else{
            abort(403,'Unauthorized!');
        }

    }
}
