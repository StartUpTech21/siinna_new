<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Teller
{
    public function handle(Request $request, Closure $next)
    {
        if(isset(Auth()->User()->level1)){
            if(Auth()->User()->level1 !== "teller"){
                abort(404);
            }
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
