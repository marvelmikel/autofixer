<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(auth()->user()->is_auth == 'company'){
        //     return $next($request);
        // }
        // if(auth()->user()->is_auth == 'individual'){
        //     return $next($request);
        // }
        // if(auth()->user()->is_auth == 'admin'){
        //     return $next($request);
        // }
        return $next($request);
   
        // return redirect('login')->with('error',"You don't have admin access.");
    }
}
