<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'redirect' => \App\Http\Middleware\RedirectIfAuthenticated::class,
            'role' => \App\Http\Middleware\RoleMiddleware::class,
            'trim' => \App\Http\Middleware\TrimStrings::class,
            'trust_host' => \App\Http\Middleware\TrustHosts::class,
            'trust_proxy' => \App\Http\Middleware\TrustProxies::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
