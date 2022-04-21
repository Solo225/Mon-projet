<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin
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
        // VERIFIONS LE TYPE DE L'UTILISATEUR CONNECTE
        if(auth()->user()->type == "admin"){
            // SI C'EST L'ADMIN
            return $next($request);
        } else{
            // SI NON
            return "Yo Mec, t'es pas censé être ici, tu le sais ça ?";
        }

    }
}
