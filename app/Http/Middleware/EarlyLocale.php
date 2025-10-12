<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EarlyLocale
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->route('lang');

        if (!in_array($lang, ['en', 'es', 'pt'])) {
            $lang = 'en';
        }

        App::setLocale($lang);

        return $next($request);
    }
}
