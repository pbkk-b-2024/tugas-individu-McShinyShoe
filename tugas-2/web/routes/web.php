<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenOddController;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\PrimeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::fallback(function () {
    return response()->view('template.err.404', [], 404);
});

Route::prefix('/home')->group(function() {
    Route::get('/', function () {
        return view('template.home');
    });
    Route::get('/view/{category}', function () {
        return view('template.view');
    });
    Route::get('/create/{category}', function () {
        return view('template.create');
    });
    Route::get('/edit/{category}', function () {
        return view('template.edit');
    });
});

Route::get('/about', function () {
    return view('template.about');
});
