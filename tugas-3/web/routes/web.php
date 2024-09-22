<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('template.home');
});

Route::get('/about', function () {
    return view('template.about');
});

Route::prefix('/dashboard')->middleware('auth')->group(function() {
    Route::get('/', function () {
        return view('template.dashboard');
    });
    Route::get('/view/{category}', [ViewController::class, 'index']);
    Route::get('/create/{category}', function () {
        return view('template.create');
    });

    Route::get('/edit/{category}/{id}', [EditController::class, 'index']);
    Route::put('/edit/{category}/{id}', [EditController::class, 'update']);
    Route::delete('/edit/{category}/{id}', [EditController::class, 'destroy']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::fallback(function () {
    return response()->view('template.err.404', [], 404);
});
