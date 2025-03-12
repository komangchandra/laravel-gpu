<?php

use App\Http\Controllers\ApiTransactionController;
use App\Http\Controllers\ApiUnitController;
use App\Http\Controllers\AuthApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthApiController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthApiController::class, 'logout']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ApiTransactionController::class)->group(function () {
    Route::get('/transactions', 'index')->name('api.transactions.index');
    Route::post('/transactions', 'store')->name('api.transactions.store');
});

Route::get('/units/{unit_id}', [ApiUnitController::class, 'show']);


// Route::get('/categories/{slug}', 'show')->name('categories.show');
// Route::put('/categories/{category}', 'update')->name('categories.update');
// Route::delete('/categories/{category}', 'destroy')->name('categories.destroy');