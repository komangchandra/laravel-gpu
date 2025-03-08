<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('categories.index');


Route::controller(UnitController::class)->group(function () {
    Route::get('/dashboard/units', 'index')->name('units.index');
    Route::get('/dashboard/units/create', 'create')->name('units.create');
    Route::post('/dashboard/units/store', 'store')->name('units.store');
    // Route::get('/dashboard/units/{contact}/edit', 'edit')->name('units.edit');
    // Route::put('/dashboard/units/{contact}', 'update')->name('units.update');
    // Route::delete('/dashboard/units/{contact}/destroy', 'destroy')->name('units.destroy');
})->middleware('auth');

Route::controller(ActivityController::class)->group(function () {
    Route::get('/dashboard/activities', 'index')->name('activities.index');
    Route::get('/dashboard/activities/create', 'create')->name('activities.create');
    Route::post('/dashboard/activities/store', 'store')->name('activities.store');
})->middleware('auth');
