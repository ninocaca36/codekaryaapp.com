<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;

Route::get('/', function () {
    $services = \App\Models\Service::where('is_active', true)->orderBy('order')->get();
    return view('frontend', compact('services'));
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');

    Route::get('/users', [\App\Http\Controllers\Backend\UserController::class, 'index'])->name('users.index');
    Route::resource('services', \App\Http\Controllers\Backend\ServiceController::class);
    Route::get('/visitors', [\App\Http\Controllers\Backend\VisitorController::class, 'index'])->name('visitors.index');

    // Roles & Permissions
    Route::get('/roles-permissions', [\App\Http\Controllers\Backend\RolePermissionController::class, 'index'])->name('roles-permissions.index');
    Route::post('/roles', [\App\Http\Controllers\Backend\RolePermissionController::class, 'storeRole'])->name('roles.store');
    Route::post('/permissions', [\App\Http\Controllers\Backend\RolePermissionController::class, 'storePermission'])->name('permissions.store');
    Route::post('/assign-permissions', [\App\Http\Controllers\Backend\RolePermissionController::class, 'assignPermission'])->name('assign-permissions');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
