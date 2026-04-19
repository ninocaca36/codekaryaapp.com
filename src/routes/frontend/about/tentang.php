<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\TentangController;

Route::prefix('tentang-kami')->group(function () {
    
    // halaman utama tentang
    Route::get('/', [TentangController::class, 'index'])->name('frontend.tentang-kami.index');

    // contoh show detail (optional)
    Route::get('/{slug}', [TentangController::class, 'show'])->name('frontend.tentang-kami.show');

});