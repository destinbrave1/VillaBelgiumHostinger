<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admins
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the session has the key indicating admin authentication
        if (!$request->session()->has('admin_authenticated')) {
            // If not authenticated, redirect to the login page with the original request URL
            return redirect()->route('login')->with('url.intended', $request->fullUrl());
        }

        // If authenticated as admin, proceed with the request
        return $next($request);
    }
}
