<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdminRole
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
        if(auth()->user() && auth()->user()->hasRole('super_admin')){

            return $next($request);
        }
        return redirect('/404');
    }
}
