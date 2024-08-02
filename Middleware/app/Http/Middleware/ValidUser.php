<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response

    {
        echo "<div class='p-4 bg-purple-50 border border-purple-800 rounded m-5'>";
        echo "<h3 class='text-purple-800'>We are now in valid user middleware</h3>";
        echo "<h3 class='text-purple-800'>" . $role . "</h3>";
        echo "</div>";

        if (Auth::user()->role == $role) {
            return $next($request);
        } else if (Auth::user()->role == "user") {
            return redirect()->route('user');
        } else {
            return redirect()->route('login');
        }

        /*  if (Auth::check() && Auth::user()->role == $role) {
            return $next($request);
        } else {
            return redirect()->route('login');
        } */
    }


    public function terminate(Request $request, Response $response): Void

    {
        echo "<div class='p-4 bg-purple-50 border border-purple-800 rounded m-5'>";
        echo "<h3 class='text-purple-900 font-bold'>We are now terminating valid user middleware</h3>";
        echo "</div>";
    }
}
