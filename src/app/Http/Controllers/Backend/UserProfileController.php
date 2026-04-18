<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        
        // Simulasi data file yang telah diupload (bisa diambil dari database jika ada tabel history)
        $userFiles = [
            ['name' => 'Video_Part_1.mp4', 'type' => 'Video', 'date' => '2024-04-15'],
            ['name' => 'Transkrip_Meeting.txt', 'type' => 'Document', 'date' => '2024-04-16'],
            ['name' => 'Karaoke_Record.mp3', 'type' => 'Audio', 'date' => '2024-04-17'],
        ];

        // Hitung level berdasarkan diamonds
        $level = floor($user->diamonds / 1000) + 1;
        $progress = ($user->diamonds % 1000) / 10; // Persentase ke level berikutnya

        return view('backend.user.profile', compact('user', 'userFiles', 'level', 'progress'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only('name', 'bio', 'phone'));

        return back()->with('success', 'Profil berhasil diperbarui!');
    }
}
