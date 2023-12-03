<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    public function handle(Request $request, Closure $next) {
        if(!session()->has('user') && ($request->path() != 'auth/login' && $request->path() != 'auth/register')) {
            return redirect('auth/login')->with('fail', 'You must be logged in');
        }

        if(session()->has('user') && ($request->path() == 'auth/login' || $request->path() == 'auth/register')) {
            return back();
        }

        return $next($request);
    }
}
