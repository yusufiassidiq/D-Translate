<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "translator" && Auth::guard($guard)->check()) {
            return redirect('/translator');
        }
        if ($guard == "personal" && Auth::guard($guard)->check()) {
            return redirect('/personal');
        }
        if ($guard == "company" && Auth::guard($guard)->check()) {
            return redirect('/company');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
