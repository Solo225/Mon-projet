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
<<<<<<< HEAD
            return redirect()->route('pageclient');
=======
            return response()->json("Yo Mec, t'es pas censé être ici, tu le sais ça ?");
>>>>>>> 52bd18dd6bf306652c7e68a7d0a7a70800e19dce
        }

    }
}