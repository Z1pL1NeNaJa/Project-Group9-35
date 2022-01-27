<?php

namespace App\Http\Middleware;
use App\Category;
use Closure;

class VerifyCategory
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
        if(Category::all()->count()==0){
            return redirect()->route('TypeProductfrom');

        }
        return $next($request);
    }
}
