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
        // Increase execution time for API request
        set_time_limit(600);

        $request->validate([
            'audio' => 'required|mimes:mp3,wav,ogg,m4a,flac,mp4|max:25000', // OpenAI limit is 25MB
        ]);

        if (!$request->hasFile('audio')) {
            return back()->with('error', 'No audio file uploaded.');
        }

        $file = $request->file('audio');
        
        try {
            $apiKey = env('OPENAI_API_KEY');
            
            if (!$apiKey || $apiKey == 'sk-proj-xxxxxxxxxxxxxxxxxxxxxxxx') {
                return back()->with('error', 'OpenAI API Key belum dikonfigurasi di file .env');
            }

            // Call OpenAI Whisper API
            $response = \Illuminate\Support\Facades\Http::withToken($apiKey)
                ->timeout(300)
                ->attach('file', file_get_contents($file->path()), $file->getClientOriginalName())
                ->post('https://api.openai.com/v1/audio/transcriptions', [
                    'model' => 'whisper-1',
                    'language' => 'id',
                    'response_format' => 'text'
                ]);

            if ($response->successful()) {
                $transcription = trim($response->body());
                
                return back()->with('success', 'Transkripsi Berhasil (via OpenAI Whisper)!')
                             ->with('transcription', $transcription)
                             ->with('filename', $file->getClientOriginalName());
            }

            $errorData = $response->json();
            return back()->with('error', 'OpenAI API Error: ' . ($errorData['error']['message'] ?? 'Unknown error'));

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
