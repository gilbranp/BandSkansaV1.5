<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check() || auth()->user()->hakakses !=='superadmin'){
            abort(403,'MAAF HALAMANNYA KAGAK ADA NIH ´༎ຶД༎ຶ`');
        }
        return $next($request);
    }
}
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check() || auth()->user()->hakakses !=='admin'){
            abort(403,'Maaf Halamannya Kagak Ada Nih');
        }
        return $next($request);
    }
}