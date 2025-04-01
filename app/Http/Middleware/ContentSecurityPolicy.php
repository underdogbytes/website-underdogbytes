<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentSecurityPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Passa a requisição para o próximo middleware ou a rota
        $response = $next($request);

        // Definindo a política de CSP
        $csp = "default-src 'self';  script-src 'self'; style-src 'self' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data:; object-src 'none';";

        // Adicionando o header CSP na resposta
        $response->headers->set('Content-Security-Policy', $csp);

        // Retorna a resposta com o cabeçalho CSP configurado
        return $response;
    }
}
