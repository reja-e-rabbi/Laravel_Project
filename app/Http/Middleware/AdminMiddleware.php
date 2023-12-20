<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Suport\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
        /*if (Auth::check()) {
            if (Auth::user()->is_role == 1) {
                return $next($request);
            } else{
                return redirect(url('/login'));
            }
        }else{
            Auth::logout();
            return redirect(url('/login'));
        }*/
        if (!Auth::check()) {
            return redirect('/login');
        }else{
            return $next($request);
        }
    }
}
