<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('user') && $request->session()->has('is_admin')
            && $request->session()->get('is_admin') == 1) {
            return $next($request);
        } else {
            return redirect('/admin');
        }
    }
}
