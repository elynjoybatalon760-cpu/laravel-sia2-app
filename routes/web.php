<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController; // Gidugang kini para dili na mag-error ang ProductController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Kini nga route mogana na kay na-import na ang Controller sa taas
    Route::get('/products', [ProductController::class, 'index']); 
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';