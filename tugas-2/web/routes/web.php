<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\EditController;

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
    Route::get('/view/{category}', [ViewController::class, 'index']);
    Route::get('/create/{category}', function () {
        return view('template.create');
    });

    Route::get('/edit/{category}/{id}', [EditController::class, 'index']);
    Route::put('/edit/{category}/{id}', [EditController::class, 'update']);
    Route::delete('/edit/{category}/{id}', [EditController::class, 'destroy']);

});

Route::get('/about', function () {
    return view('template.about');
});
