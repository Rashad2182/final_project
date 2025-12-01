<?php

use App\Http\Middleware\TwoFA;
use App\Http\Middleware\Role;
use App\Http\Middleware\setLocale;
use App\Http\Middleware\Visitor;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
           'visitor' => Visitor::class,
            'locale' => SetLocale::class,
            'role' => Role::class,
            '2FA' => TwoFA::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
