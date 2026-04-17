<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Process;

class AudioToolController extends Controller
{
    public function index()
    {
        return view('backend.audio-tools.index');
    }

    public function transcribe(Request $request)
    {
        // Increase execution time to 10 minutes for long audio
        set_time_limit(600);

        $request->validate([
            'audio' => 'required|mimes:mp3,wav,ogg,m4a,flac,mp4|max:200000', // 200MB
        ]);

        if (!$request->hasFile('audio')) {
            return back()->with('error', 'No audio file uploaded.');
        }

        $file = $request->file('audio');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('audio/temp', $filename, 'public');
        $inputPath = storage_path('app/public/' . $path);
        
        // Path to python script
        $scriptPath = base_path('scripts/transcribe.py');
        
        // Execute Python script
        // We use python command. Make sure python is in PATH.
        $command = "python \"$scriptPath\" \"$inputPath\"";
        
        $result = Process::run($command);

        // Cleanup uploaded file
        // Storage::disk('public')->delete($path);

        if ($result->successful()) {
            $transcription = trim($result->output());
            
            if (str_starts_with($transcription, 'Error:')) {
                return back()->with('error', $transcription);
            }

            return back()->with('success', 'Transcription completed!')
                         ->with('transcription', $transcription)
                         ->with('filename', $file->getClientOriginalName());
        }

        return back()->with('error', 'Failed to transcribe audio: ' . $result->errorOutput());
    }
}
