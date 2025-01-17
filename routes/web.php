<?php

use App\Http\Controllers\ProductsController;
use App\Http\Middleware\MasterMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware(MasterMiddleware::class);


});

Route::get('/products-sample', [ProductsController::class, 'index']);
