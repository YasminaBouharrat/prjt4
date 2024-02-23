<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ($request->is('personnes/*') && !Auth::guard('personnes')->check()) {
                return route('personne.login');
            } elseif (!Auth::guard('clients')->check()) {
                return route('client.login');
            }
        }
    }
}
