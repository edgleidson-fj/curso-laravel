<?php

namespace App\Http\Middleware;

use Closure;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return Response('Chegamos no Middleware e finalizamos no próprio Middleware');
        //return $next($request);
    }
}
