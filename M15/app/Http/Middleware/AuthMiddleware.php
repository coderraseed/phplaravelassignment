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
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $name=$request->name;
        $pass=$request->pass;

        if ($name == "Rashed" && $pass == "rsd1234") {
            return $next($request);

        }
        else{
            return response()->json('User name and Password wrong', 401);
        }



    }
}
