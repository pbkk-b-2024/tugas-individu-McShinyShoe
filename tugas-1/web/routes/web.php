<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenOddController;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\PrimeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('home/even_odd', [EvenOddController::class, 'showForm'])->name('even_odd.form');
Route::post('home/even_odd', [EvenOddController::class, 'calculate'])->name('even_odd');

Route::get('home/fibonacci', [FibonacciController::class, 'showForm'])->name('fibonacci.form');
Route::post('home/fibonacci', [FibonacciController::class, 'calculate'])->name('fibonacci');

Route::get('home/prime', [PrimeController::class, 'showForm'])->name('prime.form');
Route::post('home/prime', [PrimeController::class, 'calculate'])->name('prime');
