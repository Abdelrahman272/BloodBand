<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAuth
{

    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('token');
        $donor = \App\Models\Donor::where('token', $token)->first();

        if(!$donor){
            return responseJson('401',"unauthorized");
        }
        return $next($request);
    }
}
