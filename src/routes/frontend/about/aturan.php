<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AturanController;

Route::prefix('aturan')->group(function () {
    
    // Halaman utama aturan
    Route::get('/', [AturanController::class, 'index'])->name('frontend.aturan.index');

    // Aturan Pembuatan Web (Pindahkan ke atas agar tidak dianggap sebagai slug)
    Route::get('/aturan-pembuatan-web', [AturanController::class, 'web'])->name('frontend.aturan.web');

    // Contoh show detail (Wildcard ditaruh paling bawah)
    Route::get('/{slug}', [AturanController::class, 'show'])->name('frontend.aturan.show');
});