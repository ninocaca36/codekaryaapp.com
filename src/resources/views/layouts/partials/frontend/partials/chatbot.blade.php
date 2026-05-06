<!-- Chatbot Floating Button -->
<div id="ai-chatbot-bubble" class="ai-chatbot-bubble">
    <em class="icon ni ni-chat-fill"></em>
    <span class="ai-notification-badge">Nio</span>
</div>

<!-- Chatbot Window -->
<div id="ai-chatbot-window" class="ai-chatbot-window d-none">
    <div class="chat-header">
        <div class="chat-user-info">
            <div class="chat-avatar">
                <img src="https://ui-avatars.com/api/?name=Nio&background=0d6efd&color=fff" alt="Nio">
            </div>
            <div class="chat-user-details">
                <span class="chat-user-name">Nio (Asisten AI)</span>
                <span class="chat-user-status"><span class="status-dot"></span> Online</span>
            </div>
        </div>
        <button id="close-chat" class="close-chat">&times;</button>
    </div>
    <div id="chat-messages" class="chat-messages">
        <div class="message ai-message">
            Halo! Saya Nio, asisten virtual Codekarya. Ada yang bisa saya bantu hari ini?
        </div>
    </div>
    <div class="chat-input-area">
        <form id="chat-form">
            @csrf
            <input type="text" id="chat-input" placeholder="Ketik pesan Anda..." autocomplete="off">
            <button type="submit" id="send-btn">
                <em class="icon ni ni-send"></em>
            </button>
        </form>
    </div>
</div>

<style>
    .ai-chatbot-bubble {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: #0d6efd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        z-index: 9999;
        transition: all 0.3s ease;
    }
    .ai-chatbot-bubble:hover {
        transform: scale(1.1);
        background: #0b5ed7;
    }
    .ai-notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: #ffc107;
        color: #000;
        font-size: 10px;
        font-weight: bold;
        padding: 2px 8px;
        border-radius: 10px;
        border: 2px solid white;
    }

    .ai-chatbot-window {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 350px;
        height: 500px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        display: flex;
        flex-direction: column;
        z-index: 9999;
        overflow: hidden;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .chat-header {
        background: #0d6efd;
        color: white;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .chat-user-info { display: flex; align-items: center; gap: 10px; }
    .chat-avatar img { width: 35px; height: 35px; border-radius: 50%; }
    .chat-user-details { display: flex; flex-direction: column; }
    .chat-user-name { font-weight: 600; font-size: 14px; }
    .chat-user-status { font-size: 11px; opacity: 0.8; display: flex; align-items: center; gap: 4px; }
    .status-dot { width: 8px; height: 8px; background: #2ecc71; border-radius: 50%; }
    
    .close-chat { background: none; border: none; color: white; font-size: 24px; cursor: pointer; }

    .chat-messages {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        gap: 10px;
        background: #f8f9fa;
    }
    .message {
        padding: 10px 15px;
        border-radius: 15px;
        max-width: 80%;
        font-size: 13px;
        line-height: 1.5;
    }
    .ai-message {
        background: white;
        align-self: flex-start;
        border-bottom-left-radius: 2px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .user-message {
        background: #0d6efd;
        color: white;
        align-self: flex-end;
        border-bottom-right-radius: 2px;
    }

    .chat-input-area {
        padding: 15px;
        border-top: 1px solid #eee;
    }
    #chat-form { display: flex; gap: 10px; }
    #chat-input {
        flex: 1;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px 15px;
        font-size: 13px;
        outline: none;
    }
    #send-btn {
        background: #0d6efd;
        color: white;
        border: none;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    
    .typing-indicator {
        font-size: 11px;
        color: #888;
        font-style: italic;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bubble = document.getElementById('ai-chatbot-bubble');
        const window = document.getElementById('ai-chatbot-window');
        const closeBtn = document.getElementById('close-chat');
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');
        const messagesDiv = document.getElementById('chat-messages');

        bubble.addEventListener('click', () => {
            window.classList.toggle('d-none');
        });

        closeBtn.addEventListener('click', () => {
            window.classList.add('d-none');
        });

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const message = chatInput.value.trim();
            if (!message) return;

            // Add user message to UI
            addMessage(message, 'user');
            chatInput.value = '';

            // Show typing indicator
            const typingId = 'typing-' + Date.now();
            addMessage('Nio sedang mengetik...', 'ai', typingId);

            try {
                const response = await fetch('{{ route("ai.chat") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ message: message })
                });

                const data = await response.json();
                
                // Remove typing indicator
                document.getElementById(typingId).remove();

                if (data.status === 'success') {
                    addMessage(data.answer, 'ai');
                } else {
                    addMessage('Maaf, terjadi kesalahan.', 'ai');
                }
            } catch (error) {
                document.getElementById(typingId).remove();
                addMessage('Koneksi bermasalah.', 'ai');
            }
        });

        function addMessage(text, type, id = null) {
            const div = document.createElement('div');
            div.className = `message ${type}-message`;
            if (id) div.id = id;
            div.textContent = text;
            messagesDiv.appendChild(div);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }
    });
</script>
