<?php

namespace App\Http\Middleware;

use Closure;

class ActivityFilter {
    /*
    // 前置操作，在请求执行前
    public static function handle($request, Closure $next){
        if(time() < strtotime('2016-11-11')){
            return redirect('activity0');
        }

        return $next($request);
    }
    */

    // 后置操作，在请求执行后
    public static function handle($request, Closure $next){
        $response = $next($request);
        var_dump($response);

        echo '后置操作';
    }
}
