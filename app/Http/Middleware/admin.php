<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Support\Facades\Auth;

class admin
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

        if (Auth::check() && Auth::user()->isRole()=="admin") {
            // Redirect...
            return $next($request);
        }
        return redirect('login');
    }
}
