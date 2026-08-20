<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Redirect unauthenticated users based on the URL path they tried to access
        $middleware->redirectGuestsTo(function (Request $request) {
            if (
                $request->is('admin-*') ||
                $request->is('add-admin') ||
                $request->is('view-details*') ||
                $request->is('view-employee*') ||
                $request->is('security-options*')
            ) {
                return route('login');
            }

            return route('user-login'); 
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();