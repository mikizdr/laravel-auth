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
        // check if we are logged in as user or as admin
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    // if we are logged in as admin we will be redirected to the admin home page
                    return redirect('admin/home');
                }
                break;
            
            default:
                if (Auth::guard($guard)->check()) {
                    // if we are logged in as user we will be redirected to the user home page
                    return redirect('/home');
                }
                break;
        }

        // if we are not logged in
        return $next($request);
    }
}
