<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crm\dev\ListDevProjectsController;
use App\Http\Controllers\crm\dev\ShowAddDevProjectsController;
use App\Http\Controllers\crm\dev\StoreDevProjectsController;
use App\Http\Controllers\crm\dev\DeleteDevProjectsController;

use App\Http\Controllers\crm\projects\ListProjectsController;
use App\Http\Controllers\crm\projects\ShowAddProjectsController;
use App\Http\Controllers\crm\projects\StoreProjectsController;
use App\Http\Controllers\crm\projects\DeleteProjetcsController;

Route::get('/', function () {
    return view('website.home');
})->name('home');

Route::middleware('admin')
    ->group(function () {
        Route::prefix('/crm')
            ->as('crm.')
            ->group(function () {
                Route::get('/', function () { return view('crm.index');})->name('crm');

                // Dev
                Route::get('/dev/list', ListDevProjectsController::class)->name('list-dev');
                Route::get('/dev/add', ShowAddDevProjectsController::class)->name('add-dev');
                Route::post('/dev/store', StoreDevProjectsController::class)->name('store-dev');
                Route::get('/dev/delete/{id}', DeleteDevProjectsController::class)->name('delete-dev');

                // Projects
                Route::get('/projects/list', ListProjectsController::class)->name('list-proj');
                Route::get('/projects/add', ShowAddProjectsController::class)->name('add-proj');
                Route::post('/projects/store', StoreProjectsController::class)->name('store-proj');
                Route::get('/projects/delete/{id}', DeleteProjetcsController::class)->name('delete-proj');
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
