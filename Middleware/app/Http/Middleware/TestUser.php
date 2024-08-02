<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TestUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {
        echo "<div class='p-4 bg-purple-50 border border-purple-800 rounded m-5'>";
        echo "<h3 class='text-purple-500'>We are now in test user middleware</h3>";
        echo "</div>";

        if (Auth::check()) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
