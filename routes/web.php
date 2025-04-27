<?php

use App\Http\Controllers\DesignController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomLayoutController;
use App\Http\Controllers\SavedDesignController;
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
});
Route::middleware(['auth'])->group(function () {

    Route::get('/room-layouts/create', [RoomLayoutController::class, 'create'])->name('room-layouts.create');
    Route::post('/room-layouts', [RoomLayoutController::class, 'store'])->name('room-layouts.store');

    Route::get('/designs/search', [DesignController::class, 'search'])->name('designs.search');
    
    Route::post('/designs/save/{designId}', [SavedDesignController::class, 'save'])->name('designs.save');

    Route::get('/profile/saved-designs', [SavedDesignController::class, 'profile'])->name('profile.saved-designs');
    Route::get('/room/{id}/matches', [RoomLayoutController::class, 'showMatches'])->name('room.matches');


});

require __DIR__.'/auth.php';
