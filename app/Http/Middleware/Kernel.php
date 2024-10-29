<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\HandleInertiaRequests::class, // Middleware de Inertia
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middleware específicos para las rutas web
        ],

        'api' => [
            // Middleware específicos para las rutas API
        ],
    ];

    protected $routeMiddleware = [
        // Middleware que pueden ser asignados a rutas individuales
    ];
}
