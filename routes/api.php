<?php

use App\Http\Controllers\ApiTransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(ApiTransactionController::class)->group(function () {
    Route::get('/transactions', 'index')->name('api.transactions.index');
    Route::post('/transactions', 'store')->name('api.transactions.store');
});

// Route::get('/categories/{slug}', 'show')->name('categories.show');
// Route::put('/categories/{category}', 'update')->name('categories.update');
// Route::delete('/categories/{category}', 'destroy')->name('categories.destroy');