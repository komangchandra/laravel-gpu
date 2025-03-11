<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');

Route::controller(UnitController::class)->group(function () {
    Route::get('/dashboard/units', 'index')->name('units.index')->middleware('auth');
    Route::get('/dashboard/units/create', 'create')->name('units.create')->middleware('auth');;
    Route::post('/dashboard/units/store', 'store')->name('units.store')->middleware('auth');;
});

Route::controller(UserController::class)->group(function () {
    Route::get('/dashboard/users', 'index')->name('users.index')->middleware('auth');
    // Route::get('/dashboard/units/create', 'create')->name('units.create')->middleware('auth');;
    // Route::post('/dashboard/units/store', 'store')->name('units.store')->middleware('auth');;
});

Route::controller(TransactionController::class)->group(function () {
    Route::get('/dashboard/transactions', 'index')->name('transaction.index')->middleware('auth');
});

// Route::get('/dashboard/units/{contact}/edit', 'edit')->name('units.edit');
// Route::put('/dashboard/units/{contact}', 'update')->name('units.update');
// Route::delete('/dashboard/units/{contact}/destroy', 'destroy')->name('units.destroy');