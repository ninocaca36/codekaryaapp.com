<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\TeamController;

Route::prefix('team')->group(function () {
    Route::get('/', [TeamController::class, 'index'])->name('frontend.team.index');
});
