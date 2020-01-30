<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     /*Checks if the logged in user is an admin*/
    public function handle($request, Closure $next)
    {
        if ( auth()->user()->usertype > 1){
          return redirect('/home');
        }
        return $next($request);
    }
}
