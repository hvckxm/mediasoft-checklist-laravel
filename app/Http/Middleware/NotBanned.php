<?php

namespace App\Http\Middleware;

use App\Http\Controllers\API\BaseController;
use Closure;
use Illuminate\Http\Request;

class NotBanned
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user() && auth()->user()->access->banned)
        {
            return (new BaseController)->sendError('Access denied', 'You are banned', 403);
        }

        return $next($request);
    }
}
