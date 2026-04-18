<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;

Route::get('/', function () {
    $services = \App\Models\Service::where('is_active', true)->orderBy('order')->get();
    return view('frontend', compact('services'));
});

// Public Creative Space Routes
Route::get('/karya/video-ser', [\App\Http\Controllers\FrontendMusicController::class, 'videoSer'])->name('frontend.music.index');
Route::get('/karya/karaoke', [\App\Http\Controllers\FrontendMusicController::class, 'karaoke'])->name('frontend.music.karaoke');
Route::get('/karya/podcast', [\App\Http\Controllers\FrontendPodcastController::class, 'index'])->name('frontend.podcast.index');
Route::get('/blog', [\App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('frontend.blog.index');
Route::get('/blog/{slug}', [\App\Http\Controllers\Frontend\BlogController::class, 'show'])->name('frontend.blog.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [\App\Http\Controllers\Backend\UserController::class, 'index'])->name('users.index');
    Route::resource('services', \App\Http\Controllers\Backend\ServiceController::class);
    Route::get('/visitors', [\App\Http\Controllers\Backend\VisitorController::class, 'index'])->name('visitors.index');

    // Roles & Permissions
    Route::get('/roles-permissions', [\App\Http\Controllers\Backend\RolePermissionController::class, 'index'])->name('roles-permissions.index');
    Route::post('/roles', [\App\Http\Controllers\Backend\RolePermissionController::class, 'storeRole'])->name('roles.store');
    Route::post('/permissions', [\App\Http\Controllers\Backend\RolePermissionController::class, 'storePermission'])->name('permissions.store');
    // Video Tools
    Route::get('/video-tools', [\App\Http\Controllers\Backend\VideoToolController::class, 'index'])->name('video-tools.index');
    Route::post('/video-tools/cut', [\App\Http\Controllers\Backend\VideoToolController::class, 'cut'])->name('video-tools.cut');

    // Audio Tools
    Route::get('/audio-tools', [\App\Http\Controllers\Backend\AudioToolController::class, 'index'])->name('audio-tools.index');
    Route::post('/audio-tools/transcribe', [\App\Http\Controllers\Backend\AudioToolController::class, 'transcribe'])->name('audio-tools.transcribe');

    // Music & Creative Space
    Route::get('/music-space', [\App\Http\Controllers\Backend\MusicController::class, 'index'])->name('music.index');
    Route::get('/music-space/karaoke', [\App\Http\Controllers\Backend\MusicController::class, 'karaoke'])->name('music.karaoke');
    Route::get('/podcast-space', [\App\Http\Controllers\Backend\PodcastController::class, 'index'])->name('podcast.index');

    // Store & Sawer
    Route::get('/diamond-store', [\App\Http\Controllers\Backend\StoreController::class, 'index'])->name('store.index');
    Route::post('/diamond-store/buy', [\App\Http\Controllers\Backend\StoreController::class, 'buy'])->name('store.buy');
    Route::post('/diamond-store/sawer', [\App\Http\Controllers\Backend\StoreController::class, 'sawer'])->name('store.sawer');

    // User Profile
    Route::get('/my-profile', [\App\Http\Controllers\Backend\UserProfileController::class, 'show'])->name('user.profile');
    Route::post('/my-profile/update', [\App\Http\Controllers\Backend\UserProfileController::class, 'update'])->name('user.profile.update');

    Route::resource('blog', \App\Http\Controllers\Backend\BlogController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
