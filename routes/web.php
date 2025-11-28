<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\V1\AlbumController;
use App\Http\Controllers\V1\ImageManipulationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/token/create', [DashboardController::class, 'showTokenForm'])->name('token.showForm');
    Route::post('/token/create', [DashboardController::class, 'createToken'])->name('token.create');
    Route::post('/token/delete/{token}', [DashboardController::class, 'deleteToken'])->name('token.delete');

    Route::apiResource("album", AlbumController::class);
        Route::get('image',[ImageManipulationController::class, 'index']);
        Route::get('image/{image}',[ImageManipulationController::class, 'show']);
        Route::get('image/by-album/{album}',[ImageManipulationController::class, 'byAlbum']);
        Route::post('image/resize',[ImageManipulationController::class, 'resize']);
        Route::delete('image/{image}',[ImageManipulationController::class, 'destroy']);
});

require __DIR__.'/auth.php';
