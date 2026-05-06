<?php

namespace App\Ai\Agents;

use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\Conversational;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Messages\Message;
use Laravel\Ai\Promptable;
use Stringable;

class ChatbotAgent implements Agent, Conversational, HasTools
{
    use Promptable;

    /**
     * Get the instructions that the agent should follow.
     */
    public function instructions(): Stringable|string
    {
        return 'Anda adalah "Nio", asisten virtual pintar dari Codekarya. Tugas Anda adalah membantu pengunjung website memahami layanan Codekarya seperti pembuatan website, aplikasi custom, dan sistem informasi. Jawablah dengan ramah, profesional, dan menggunakan Bahasa Indonesia yang santun. Jika pengunjung bertanya tentang harga, sarankan mereka untuk mengklik tombol "Konsultasi Gratis" untuk terhubung ke WhatsApp.';
    }

    /**
     * Get the list of messages comprising the conversation so far.
     *
     * @return Message[]
     */
    public function messages(): iterable
    {
        return [];
    }

    /**
     * Get the tools available to the agent.
     *
     * @return Tool[]
     */
    public function tools(): iterable
    {
        return [];
    }
}
