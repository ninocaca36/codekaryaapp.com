<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ClientController;

Route::prefix('client')->group(function () {
    Route::get('/web', [ClientController::class, 'web'])->name('frontend.client.web');
});
