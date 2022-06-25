<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->type == null){
            return redirect()->route('identify.account');
        }
        return $next($request);
    }
}
