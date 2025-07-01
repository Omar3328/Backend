<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['message' => 'No autenticado'], 401);
        }

        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        return response()->json(['message' => 'No autorizado'], 403);
    }
}
