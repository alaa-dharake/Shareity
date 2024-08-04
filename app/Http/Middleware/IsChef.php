<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsChef
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'chef') {
            return $next($request);
        }
        return redirect('/');
    }
}