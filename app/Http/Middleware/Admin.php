<?php

namespace App\Http\Middleware;

use Closure;
use Auth; 

class Admin
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
        if (Auth::check() && Auth::user()->role == 1) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 2) {
            return redirect('/doctor');
        }
        elseif (Auth::check() && Auth::user()->role == 3) {
            return redirect('/nurse');
        }
        elseif (Auth::check() && Auth::user()->role == 4) {
            return redirect('/patient');
        }
        elseif (Auth::check() && Auth::user()->role == 5) {
            return redirect('/it');
        }
        elseif (Auth::check() && Auth::user()->role == 6) {
            return redirect('/reception');
        }
        else {
            return redirect('/');
        }
    }
   
}
