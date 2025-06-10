<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class adminauth
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // If not logged in
        if (!$user) {
            return Redirect::to('/login');
        }

        // If user is not an admin (assuming admin = role 0)
        if ($user->role == 0) {
            return Redirect::to('/admin/dashboard'); // or any other page
        }

        // Allow request to proceed
        return $next($request);
    }
}
