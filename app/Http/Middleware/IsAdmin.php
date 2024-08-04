<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        Log::info('Checking admin access for user: ', ['user' => $user]);

        if (Auth::check() && $user && $user->is_admin) {
            return $next($request);
        }

        Log::warning('Access denied. User is not an admin.', ['user' => $user]);
        return redirect('/')->with('error', 'You do not have admin access');
    }
}
