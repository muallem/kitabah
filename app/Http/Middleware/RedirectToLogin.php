<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToLogin
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->status() === 404 || $request->status() === 419) {
            return redirect()->route('login.index');
        }

        return $next($request);
    }
}
