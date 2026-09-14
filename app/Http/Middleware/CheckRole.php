<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (! $request->user() || ! in_array($request->user()->role, $roles)) {
            return response()->view('errors.custom-403', [
                'message' => 'Anda tidak memiliki hak akses untuk membuka halaman ini.'
            ], 403);
        }

        return $next($request);
    }
}

