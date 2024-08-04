<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdminOrChef
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->role == 'admin' || Auth::user()->role == 'chef')) {
            return $next($request);
        }

        return redirect('/')->with('error', 'You do not have access to this resource.');
    }
}