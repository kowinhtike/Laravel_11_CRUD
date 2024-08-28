<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Custom logic before request is handled
        if ($request->user()) { //$request->user() && $request->user()->is_admin
            // Allow the request to proceed if the user is an admin
            return $next($request);
        }

        // If the condition fails, you can redirect or return a custom response
        return redirect('/login')->with('error', 'You are not authorized to access this page.');
    }
}
