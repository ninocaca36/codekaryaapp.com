<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\TentangController;

Route::prefix('tentang')->group(function () {
    
    // halaman utama tentang
    Route::get('/', [TentangController::class, 'index'])->name('tentang.index');

    // contoh show detail (optional)
    Route::get('/{slug}', [TentangController::class, 'show'])->name('tentang.show');

});