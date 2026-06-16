<?php

use App\Http\Middleware\CheckDashboardAccess;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\IsAdmin::class,
            'dashboard.access' => CheckDashboardAccess::class,
            'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class, // Verifier si l'utilisateur a vérifié son email
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function(NotFoundHttpException $e, $request){
            return response()->view('errors.404', [], 404);
        });
        $exceptions->render(function(AccessDeniedHttpException $e, $request){
           return response()->view('errors.403', [], 403); 
        });
    })->create();