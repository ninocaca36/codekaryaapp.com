<x-frontend-layout>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-primary-darker novi-bg novi-bg-img">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Ruang Karaoke Digital</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Karya</a></li>
                <li class="active">Karaoke</li>
            </ul>
        </div>
    </section>

    <!-- Karaoke Area -->
    <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h3 class="text-center">Ekspresikan Suaramu di <span class="text-primary font-weight-bold">Ruang Karaoke</span></h3>
                    <p class="text-center">Unggah instrumen (minus-one) lagu favoritmu dan mulai bernyanyi. Gunakan area lirik untuk membantu penampilanmu.</p>
                </div>
            </div>
            
            <div class="row row-30 mt-5 align-items-stretch">
                <div class="col-lg-8 wow-outer">
                    <div class="bg-primary-darker p-5 rounded text-center h-100 d-flex flex-column justify-content-center wow slideInLeft">
                        <div class="mb-4">
                            <span class="icon icon-xl mdi mdi-microphone text-primary"></span>
                        </div>
                        <h4 class="text-white">Siap untuk Bernyanyi?</h4>
                        <div class="form-group mt-4 px-md-5">
                            <input type="file" class="form-control" id="karaokeFile" accept="audio/*" style="display: none;">
                            <button onclick="document.getElementById('karaokeFile').click()" class="button button-primary">Pilih Musik Instrumen</button>
                        </div>
                        <div id="playerContainer" class="mt-4 d-none">
                            <audio id="audioPlayer" controls class="w-100"></audio>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 wow-outer">
                    <div class="bg-white p-4 rounded border h-100 wow slideInRight">
                        <h5 class="text-center mb-3">Area Lirik</h5>
                        <textarea class="form-control" rows="15" placeholder="Tempel lirik lagu di sini..."></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.getElementById('karaokeFile').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const player = document.getElementById('audioPlayer');
            const container = document.getElementById('playerContainer');
            if (file) {
                const url = URL.createObjectURL(file);
                player.src = url;
                container.classList.remove('d-none');
                player.play();
            }
        });
    </script>
    @endpush
</x-frontend-layout>
