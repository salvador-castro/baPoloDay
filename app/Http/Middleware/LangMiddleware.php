<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LangMiddleware
{
    public function handle($request, Closure $next)
    {
        // Debe coincidir con {lang} en las rutas
        $lang = $request->route('lang');
        $allowed = ['en', 'es', 'pt'];

        App::setLocale(in_array($lang, $allowed, true) ? $lang : config('app.locale'));

        return $next($request);
    }
}
