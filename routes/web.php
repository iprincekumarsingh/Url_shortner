<?php

use App\Http\Controllers\UrlShortner;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', [UrlShortner::class, 'index'])->name('home');
Route::get('/{url}', [UrlShortner::class, 'searchUrl'])->name('search.url');

Route::get('/customUrl', [UrlShortner::class, 'customUrl'])->name('custom.url');
Route::post('/customUrl', [UrlShortner::class, 'generateCustomUrl'])->name('custom.generate');
Route::get('/generateUrl', [UrlShortner::class, 'urlGenerator'])->name('url.generate');


