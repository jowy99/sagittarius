<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\website\dev\ShowDevProjectsController;

use App\Http\Controllers\website\projects\ShowProjectsController;
use App\Http\Controllers\website\projects\DownloadFileController;
use App\Http\Controllers\website\projects\ShowFileController;

use App\Http\Controllers\website\opinions\StoreOpinionsController;

use App\Http\Controllers\website\contact\SendContactRequestController;

Route::get('/', function () {
    return view('website.home');
})->name('home');

Route::get('/dev', ShowDevProjectsController::class)->name('dev');

Route::get('/projects', ShowProjectsController::class)->name('projects');
Route::get('/projects/download/{file}', DownloadFileController::class)->name('projects-download');
Route::get('/projects/view/{file}', ShowFileController::class)->name('projects-view');

Route::get('/opinions', function () { return view('website.opinions'); })->name('opinions');
Route::post('/opinions/store', StoreOpinionsController::class)->name('opinions-store');

Route::get('/aboutme', function () { return view('website.aboutme'); })->name('aboutme');

Route::get('/contact', function () { return view('website.contact'); })->name('contact');
Route::post('/contact', SendContactRequestController::class)->name('send-contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
