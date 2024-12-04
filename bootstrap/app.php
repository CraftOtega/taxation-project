<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\GovtMiddleware;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Middleware\ClientMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'agent' =>AgentMiddleware::class,
            'govt' =>GovtMiddleware::class,
            'client' =>ClientMiddleware::class,

        ]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
