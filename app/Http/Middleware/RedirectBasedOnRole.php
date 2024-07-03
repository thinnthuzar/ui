<?php

namespace App\Http\Middleware;

use Closure;

class RedirectBasedOnRole
{
    public function handle($request, Closure $next)
    {
        // if ($request->user() && in_array($request->user()->role, $roles)) {
        //     if ($request->user()->role === 'admin') {
        //         return redirect()->route('admin.home');
        //     } elseif ($request->user()->role === 'customer') {
        //         return redirect()->route('website.userpage');
        //     }
        // }

        return $next($request);
    }
}
