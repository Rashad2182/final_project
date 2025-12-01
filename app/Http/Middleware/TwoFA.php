<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TwoFA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        // 2FA aktivdir amma istifadəçi hələ təsdiqləməyib
        if ($user->is_2fa_enabled && !$user->is_2fa_verified) {

            // Amma əgər artıq 2FA səhifəsindədirsə, loop olmasın
            if (!$request->is('2fa/verify') && !$request->is('2fa/*')) {
                return redirect()->route('2fa.verify');
            }
        }

        // Əks halda davam et
        return $next($request);
    }
}
