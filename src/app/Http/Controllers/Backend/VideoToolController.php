<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Process;

class VideoToolController extends Controller
{
    public function index()
    {
        return view('backend.video-tools.index');
    }

    public function cut(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,avi,wmv|max:100000', // 100MB
            'start_time' => 'required|regex:/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/', // HH:MM:SS
            'duration' => 'required|numeric|min:1',
        ]);

        if (!$request->hasFile('video')) {
            return back()->with('error', 'No video file uploaded.');
        }

        $file = $request->file('video');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('videos/temp', $filename, 'public');
        $inputPath = storage_path('app/public/' . $path);
        
        $outputName = 'cut_' . time() . '.mp4';
        $outputRelPath = 'videos/output/' . $outputName;
        $outputPath = storage_path('app/public/' . $outputRelPath);
        
        // Ensure output directory exists
        if (!file_exists(storage_path('app/public/videos/output'))) {
            mkdir(storage_path('app/public/videos/output'), 0755, true);
        }

        // FFmpeg command: -ss before -i for faster seeking, or after for accuracy. 
        // Using -c copy for fast cutting without re-encoding.
        $command = "ffmpeg -ss {$request->start_time} -i \"$inputPath\" -t {$request->duration} -c copy \"$outputPath\"";
        
        $result = Process::run($command);

        if ($result->successful()) {
            return back()->with('success', 'Video cut successfully!')
                         ->with('download_url', asset('storage/' . $outputRelPath))
                         ->with('output_name', $outputName);
        }

        return back()->with('error', 'Failed to cut video: ' . $result->errorOutput());
    }
}
