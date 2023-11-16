<?php

namespace App\Http\Middleware;

use App\Helpers\AuthHelper;
use Closure;
use Illuminate\Http\Request;

class Student
{
    public function handle(Request $request, Closure $next)
    { 
        if (AuthHelper::isAdmin()) {
            return redirect()->route('login.index');
        }
        $response = $next($request);

        // Handle 404 errors
        if ($response->status() == 404) {
            return redirect()->route('login.index'); // Redirect to the login route for 404 errors
        }
        return $response;
    }
}
