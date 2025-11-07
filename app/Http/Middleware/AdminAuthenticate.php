<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Check if the user is authenticated at all
        if (! Auth::check()) {
            // If not logged in, redirect them to the login route
            return redirect()->route('login');
        }

        $user = Auth::user();

        // 2. Check if the authenticated user is an admin
        // This assumes your User model has an 'is_admin' column.
        if (! $user->is_admin) {
            // Abort with a 403 Forbidden response if they are not an admin
            abort(403, 'You do not have administrative privileges to access this area.');

            /*
            Alternatively, you could redirect to the home page with an error message:
            return redirect('/')->with('error', 'Unauthorized access.');
            */
        }

        // 3. If the user is authenticated and is an admin, let the request proceed
        return $next($request);
    }
}