<?php

namespace App\Http\Middleware;

use Closure;

class ActivityFilter {

    public static function handle($request, Closure $next){
        if(time() < strtotime('2016-11-11')){
            return redirect('activity0');
        }

        return $next($request);
    }
}
