<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenOddController;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\PrimeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::fallback(function () {
    return response()->view('page.err.404', [], 404);
});

Route::prefix('/home')->group(function() {
    Route::get('/', function () {
        return view('page.home');
    });

    Route::get('/even_odd', [EvenOddController::class, 'showForm'])->name('even_odd.form');
    Route::post('/even_odd', [EvenOddController::class, 'calculate'])->name('even_odd');

    Route::get('/fibonacci', [FibonacciController::class, 'showForm'])->name('fibonacci.form');
    Route::post('/fibonacci', [FibonacciController::class, 'calculate'])->name('fibonacci');

    Route::get('/prime', [PrimeController::class, 'showForm'])->name('prime.form');
    Route::post('/prime', [PrimeController::class, 'calculate'])->name('prime');
});

Route::get('/about', function () {
    return view('page.about');
});
