<?php

namespace App\Http\Middleware;

use Closure;

class is_teacher
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
        if (auth()->user()->is_admin ==2 || auth()->user()->id ==1) {
            return $next($request);
        }
        return redirect('login')->with('error',"not admin");
    }
}
