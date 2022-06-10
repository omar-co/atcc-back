<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyAdmin {
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        /** @var User $user */
        $user = auth()->user();
        if (!$user->isAdministrator()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
