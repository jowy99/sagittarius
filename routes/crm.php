<?php
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

use App\Http\Controllers\crm\aboutme\ShowEditAboutmeController;

Route::middleware('admin')
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

        //About me
        Route::get('/aboutme', ShowEditAboutmeController::class)->name('edit-abtme');
    });
