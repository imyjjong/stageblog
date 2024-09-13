<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
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
    Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'about'])->name('about');
    Route::get('/blog', [ \App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
    Route::get('/contact', [ \App\Http\Controllers\ContactController::class, 'contact'])->name('contact.form');
});

require __DIR__.'/auth.php';
