<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware {

    public function handle($request, Closure $next) {

        if($request->input('age') > 20 ){
            return redirect()->route('cause.index');
        }
        return $next($request);
    }
}
