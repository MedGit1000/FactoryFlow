<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please log in');
        }

        // Check if user is an admin
        if (!Auth::user()->is_admin) {
            return redirect('/dashboard')->with('error', 'Insufficient permissions');
        }

        return $next($request);
    }
}
