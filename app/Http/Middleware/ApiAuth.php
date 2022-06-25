<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAuth
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
        if($request->header('Authorization') != null && $request->header('Authorization') == 'Bearer ' . 'RZhrHRmR2ZW/k8mZYMBYI7oj9QSOhMANvhoVuIOKDe0'){
            return $next($request);
        }
        return $next($request);
    }
}
