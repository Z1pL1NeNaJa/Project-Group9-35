<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use App\User;

class VerifyIsAdmin
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
        if (Auth::user()) {
            return $next($request);
        }
        return redirect('/login');
    }
}
