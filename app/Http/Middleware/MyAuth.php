<?php

namespace App\Http\Middleware;

use App\Helpers\AuthHelper;
use Closure;
use Illuminate\Http\Request;

class MyAuth
{
    public function handle(Request $request, Closure $next)
    { 
        if (!AuthHelper::isSessionToken()) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
