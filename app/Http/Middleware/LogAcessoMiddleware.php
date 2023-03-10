<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;

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
        //dd($request);

        //Pegando dados do Request
        $IP = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        LogAcesso::create(['log'=>"IP: $IP requisitou a rota: $rota"]);
        //return Response('Chegamos no Middleware e finalizamos no próprio Middleware');
        return $next($request);
    }
}
