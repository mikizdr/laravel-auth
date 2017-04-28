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
        // check if we are logged in
        if (Auth::guard($guard)->check()) {
            // if we are logged in then it will be redirected to the home page
            return redirect('/home');
        }
        // if we are not logged in
        return $next($request);
    }
}
