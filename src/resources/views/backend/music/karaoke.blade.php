<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Ruang Karaoke Digital</h3>
                        <div class="nk-block-des text-soft">
                            <p>Bernyanyi dan ekspresikan dirimu di sini.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ route('music.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-lg-8">
                        <div class="card card-bordered">
                            <div class="card-inner bg-dark rounded">
                                <div class="text-center py-5">
                                    <div class="mb-4">
                                        <em class="icon ni ni-music text-primary" style="font-size: 80px;"></em>
                                    </div>
                                    <h2 class="text-white mb-2">Pilih Lagu untuk Karaoke</h2>
                                    <p class="text-soft">Gunakan file audio instrumen Anda dan mulai bernyanyi.</p>
                                    
                                    <div class="mt-5 px-md-5">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input" id="karaokeFile" accept="audio/*">
                                                    <label class="form-file-label" for="karaokeFile">Pilih Musik (Minus One/Instrumen)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <audio id="audioPlayer" controls class="w-100 mt-3 d-none"></audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <h6 class="overline-title mb-3">Lirik / Catatan</h6>
                                <div class="bg-light p-3 rounded border border-dashed text-center" style="min-height: 300px;">
                                    <p class="text-soft italic mt-5">Lirik lagu akan muncul di sini (Fitur segera hadir)...</p>
                                    <textarea class="form-control mt-4" rows="10" placeholder="Tempel lirik lagu Anda di sini untuk membantu bernyanyi..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.getElementById('karaokeFile').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const player = document.getElementById('audioPlayer');
            if (file) {
                const url = URL.createObjectURL(file);
                player.src = url;
                player.classList.remove('d-none');
                player.play();
            }
        });
    </script>
    @endpush
</x-app-layout>
