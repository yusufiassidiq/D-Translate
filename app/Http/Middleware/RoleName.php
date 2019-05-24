<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        
        if($user->role_name() != "translator"){
            if($user->role_name() != "company"){
                if($user->role_name() != "personal"){
                    return redirect('/');
                }
            }
        }
        return $next($request);
    }
}