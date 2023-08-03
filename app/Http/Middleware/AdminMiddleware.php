<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(Auth::check()) {
        //     //admin role = 1
        //     //user role = 0
        //     if(Auth::user()->role == '1'){
        //         return $next($request);
        //     } else {
        //         return redirect('/barang')->with('message', 'Access Denied as you are not admin!');
        //     }
        // } else {
        //     return redirect('/login')->with('message', 'login to acces the website info');
        // }
        return $next($request);
    }
}
