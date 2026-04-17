<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Audio Transcriber</h3>
                        <div class="nk-block-des text-soft">
                            <p>Convert your MP3 and other audio files into text (transcription).</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-lg-6">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="title">Upload Audio File</h5>
                                </div>
                                <form action="{{ route('audio-tools.transcribe') }}" method="POST" enctype="multipart/form-data" class="gy-3 mt-2">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="audio">Pilih File Audio/Video</label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file" name="audio" class="form-file-input" id="audio" accept="audio/*,video/mp4" required>
                                                <label class="form-file-label" for="audio">Choose file</label>
                                            </div>
                                        </div>
                                        <span class="form-note">Format: MP3, WAV, M4A, MP4. Maksimal 50MB.</span>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                                            <em class="icon ni ni-mic-fill"></em>
                                            <span>Mulai Transkrip Sekarang</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- .card -->
                        
                        <div class="card card-bordered mt-4">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="title">Informasi Library Lokal</h5>
                                </div>
                                <div class="mt-2 text-soft small">
                                    <p>Sistem ini menggunakan library Python <strong>SpeechRecognition</strong> dengan engine <strong>pydub</strong> untuk konversi file.</p>
                                    <ul class="list-check">
                                        <li>Pemrosesan berjalan di server lokal.</li>
                                        <li>Mendukung Bahasa Indonesia secara otomatis.</li>
                                        <li>Semakin jernih audio, hasil semakin akurat.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                    
                    <div class="col-lg-6">
                        <div class="card card-bordered card-full">
                            <div class="card-inner h-100 d-flex flex-column">
                                <div class="card-title-group mb-4">
                                    <div class="card-title">
                                        <h6 class="title">Hasil Transkripsi</h6>
                                    </div>
                                    @if(session('transcription'))
                                    <div class="card-tools">
                                        <button onclick="copyToClipboard()" class="btn btn-sm btn-dim btn-outline-primary">
                                            <em class="icon ni ni-copy"></em> <span>Salin Teks</span>
                                        </button>
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="mt-0 flex-grow-1">
                                    @if(session('success'))
                                        <div class="alert alert-success alert-icon mb-3">
                                            <em class="icon ni ni-check-circle"></em> 
                                            <strong>Berhasil!</strong> {{ session('success') }}
                                        </div>
                                        
                                        <div class="bg-light p-3 rounded border border-dashed" style="min-height: 200px;">
                                            <p class="text-soft small mb-2"><em class="icon ni ni-file-audio"></em> File: {{ session('filename') }}</p>
                                            <div id="transcription-text" class="text-dark fw-medium" style="white-space: pre-wrap; font-size: 1.1rem; line-height: 1.6;">{{ session('transcription') }}</div>
                                        </div>
                                    @elseif(session('error'))
                                        <div class="alert alert-danger alert-icon">
                                            <em class="icon ni ni-cross-circle"></em> 
                                            <strong>Gagal!</strong> {{ session('error') }}
                                        </div>
                                        <div class="text-center py-5 text-soft">
                                            <em class="icon ni ni-info-fill" style="font-size: 48px;"></em>
                                            <p>Terjadi kesalahan saat memproses file.</p>
                                        </div>
                                    @else
                                        <div class="text-center py-5 my-auto text-soft">
                                            <em class="icon ni ni-chat-bubble-fill" style="font-size: 64px;"></em>
                                            <p class="mt-2">Hasil tulisan akan muncul di sini setelah audio diproses.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .nk-block -->
        </div>
    </div>

    @push('scripts')
    <script>
        function copyToClipboard() {
            var text = document.getElementById("transcription-text").innerText;
            navigator.clipboard.writeText(text).then(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Disalin!',
                    text: 'Transkrip telah disalin ke clipboard.',
                    timer: 2000,
                    showConfirmButton: false
                });
            }, function(err) {
                console.error('Gagal menyalin: ', err);
            });
        }
    </script>
    @endpush
</x-app-layout>
