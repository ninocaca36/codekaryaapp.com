<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogController;

Route::prefix('blog')->group(function () {
    
    // halaman utama tentang
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');

    // contoh show detail (optional)
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');

});