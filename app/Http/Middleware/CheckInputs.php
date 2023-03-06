<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// middleware per controllare che i dati inseriti non siano nulli
class CheckInputs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if (!$this->checkInputs($request))
        {
            // input sbagliati redirect alla pagina stessa
            return redirect($request->path());
        }

        return $next($request);
    }

    private function checkInputs(Request $request): bool
    {
        return false;
    }
}
