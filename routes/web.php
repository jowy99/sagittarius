<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crm\dev\ShowAddProjectsController;
use App\Http\Controllers\crm\dev\StoreDevProjectsController;

Route::get('/', function () {
    return view('website.home');
})->name('home');

Route::middleware('admin')
    ->group(function () {
        Route::prefix('/crm')
            ->as('crm.')
            ->group(function () {
                Route::get('/', function () { return view('crm.index');})->name('crm');
                Route::get('/dev/add', ShowAddProjectsController::class)->name('add-dev');
                Route::post('/dev/store', StoreDevProjectsController::class)->name('store-dev');
            });
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
