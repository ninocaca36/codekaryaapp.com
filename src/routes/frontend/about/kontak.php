<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\KontakController;

Route::prefix('kontak')->group(function () {
    
    // halaman utama tentang
    Route::get('/', [KontakController::class, 'index'])->name('frontend.kontak.index');

    // contoh show detail (optional)
    Route::get('/{slug}', [KontakController::class, 'show'])->name('frontend.kontak.show');

});