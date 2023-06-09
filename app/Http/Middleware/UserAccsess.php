<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccsess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->hak == 'member'){

                return $next($request);

        }elseif(auth()->user()->hak == 'kasir'){

                    return $next($request);

        }elseif(auth()->user()->hak == 'pemilik'){

                return $next($request);

        }

	    return response()->json(['You do not have permission to access this page']);
    }
}