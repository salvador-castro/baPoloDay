<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LangMiddleware;

// Redirige la raíz a inglés por defecto
Route::redirect('/', '/en');

Route::group([
    'prefix'     => '{lang}',
    'where'      => ['lang' => 'en|es|pt'],
    'middleware' => LangMiddleware::class, // <— FQCN directo, sin alias
], function () {
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/experiences', fn () => view('experiences'))->name('experiences');
    Route::get('/about', fn () => view('about'))->name('about');
    Route::get('/contact', fn () => view('contact'))->name('contact');
});
