<?php

namespace App\Http\Controllers;

use App\Ai\Agents\ChatbotAgent;
use Illuminate\Http\Request;
use Laravel\Ai\Ai;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        $message = $request->input('message');
        
        try {
            // Using the AI SDK to get a response from the agent
            $response = Ai::chat($message)->using(new ChatbotAgent())->send();
            
            return response()->json([
                'status' => 'success',
                'answer' => $response->content()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Maaf, sistem sedang sibuk. Silakan coba lagi nanti.'
            ], 500);
        }
    }
}
