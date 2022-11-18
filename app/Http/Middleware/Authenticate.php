<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate {
    public function handle(Request $request, Closure $next) {
        if (!$_SESSION['session'] && $request->route()->getName() != 'login') {
            return redirect(route('login', app()->getLocale()));
        }

        return $next($request);
    }
}
