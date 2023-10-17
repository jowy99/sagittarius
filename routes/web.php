<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\crm\dev\ListDevProjectsController;
use App\Http\Controllers\crm\dev\ShowAddDevProjectsController;
use App\Http\Controllers\crm\dev\StoreDevProjectsController;
use App\Http\Controllers\crm\dev\DeleteDevProjectsController;
use App\Http\Controllers\crm\dev\ShowEditDevProjectsController;
use App\Http\Controllers\crm\dev\UpdateDevProjectsController;

use App\Http\Controllers\crm\projects\ListProjectsController;
use App\Http\Controllers\crm\projects\ShowAddProjectsController;
use App\Http\Controllers\crm\projects\StoreProjectsController;
use App\Http\Controllers\crm\projects\DeleteProjetcsController;
use App\Http\Controllers\crm\projects\ShowEditProjectsController;
use App\Http\Controllers\crm\projects\UpdateProjectsController;

use App\Http\Controllers\crm\opinions\EditOpinionsSiteController;
use App\Http\Controllers\crm\opinions\ExportOpinionsController;

use App\Http\Controllers\website\dev\ShowDevProjectsController;

use App\Http\Controllers\website\projects\ShowProjectsController;
use App\Http\Controllers\website\projects\DownloadFileController;

use App\Http\Controllers\website\opinions\StoreOpinionsController;

use App\Http\Controllers\website\contact\SendContactRequestController;

Route::get('/', function () {
    return view('website.home');
})->name('home');

Route::get('/dev', ShowDevProjectsController::class)->name('dev');

Route::get('/projects', ShowProjectsController::class)->name('projects');
Route::get('/projects/download/{file}', DownloadFileController::class)->name('projects-download');

Route::get('/opinions', function () {
    return view('website.opinions');
})->name('opinions');

Route::post('/opinions/store', StoreOpinionsController::class)->name('opinions-store');

Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');

Route::post('/contact', SendContactRequestController::class)->name('send-contact');

Route::middleware('admin')
    ->group(function () {
        Route::prefix('/crm')
            ->as('crm.')
            ->group(function () {
                // Home
                Route::get('/', function () { return view('crm.index'); })->name('crm');

                // Dev
                Route::get('/dev/list', ListDevProjectsController::class)->name('list-dev');
                Route::get('/dev/add', ShowAddDevProjectsController::class)->name('add-dev');
                Route::post('/dev/store', StoreDevProjectsController::class)->name('store-dev');
                Route::get('/dev/delete/{id}', DeleteDevProjectsController::class)->name('delete-dev');
                Route::get('/dev/{id}/edit', ShowEditDevProjectsController::class)->name('edit-dev');
                Route::put('/dev/{id}/update', UpdateDevProjectsController::class)->name('update-dev');

                // Projects
                Route::get('/projects/list', ListProjectsController::class)->name('list-proj');
                Route::get('/projects/add', ShowAddProjectsController::class)->name('add-proj');
                Route::post('/projects/store', StoreProjectsController::class)->name('store-proj');
                Route::get('/projects/delete/{id}', DeleteProjetcsController::class)->name('delete-proj');
                Route::get('/projects/{id}/edit', ShowEditProjectsController::class)->name('edit-proj');
                Route::post('/projects/{id}/update', UpdateProjectsController::class)->name('update-proj');

                // Opinions
                Route::get('/opinions', EditOpinionsSiteController::class)->name('opinions');
                Route::get('/opinions/export', ExportOpinionsController::class)->name('opinions-export');
            });
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
