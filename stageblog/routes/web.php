<?php

use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'about'])->name('about');
    Route::get('/blog', [ \App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
    Route::get('/contact', [ \App\Http\Controllers\ContactController::class, 'contact'])->name('contact.form');

    Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function(){        
        Route::get('/dashboard', function(){
            return view('dashboard');
        })->name('dashboard');
        
        Route::resources([
            'posts' => BlogAdminController::class,
        ]);
    });
});

require __DIR__.'/auth.php';
