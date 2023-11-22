<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateUser
{
    public function handle(Request $request, Closure $next)
    {
        // dd('Middleware Works!'); // Add this line for debugging

        if (Auth::check()) {
            return $next($request);
        }

        return redirect('/login');
    }
}
