<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Video Cutter Tool</h3>
                        <div class="nk-block-des text-soft">
                            <p>Cut your videos into parts easily using FFmpeg engine.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-lg-8">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="title">Upload & Cut Video</h5>
                                </div>
                                <form action="{{ route('video-tools.cut') }}" method="POST" enctype="multipart/form-data" class="gy-3">
                                    @csrf
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="video">Pilih File Video</label>
                                                <span class="form-note">Format: MP4, MOV, AVI. Max 100MB.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <div class="form-file">
                                                    <input type="file" name="video" class="form-file-input" id="video" accept="video/*" required>
                                                    <label class="form-file-label" for="video">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="start_time">Waktu Mulai (Start Time)</label>
                                                <span class="form-note">Format: HH:MM:SS (Contoh: 00:00:10)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <input type="text" name="start_time" class="form-control" id="start_time" placeholder="00:00:00" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="duration">Durasi (Detik)</label>
                                                <span class="form-note">Berapa detik yang ingin diambil?</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <input type="number" name="duration" class="form-control" id="duration" placeholder="Contoh: 30" min="1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">
                                                    <em class="icon ni ni-scissors"></em>
                                                    <span>Proses Potong Video</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                    
                    <div class="col-lg-4">
                        <div class="card card-bordered card-full">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Hasil Terakhir</h6>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    @if(session('success'))
                                        <div class="alert alert-success alert-icon">
                                            <em class="icon ni ni-check-circle"></em> 
                                            <strong>Berhasil!</strong> {{ session('success') }}
                                        </div>
                                        @if(session('download_url'))
                                            <div class="text-center py-4 bg-light rounded-sm">
                                                <em class="icon ni ni-file-video text-primary" style="font-size: 64px;"></em>
                                                <h5 class="mt-2">{{ session('output_name') }}</h5>
                                                <a href="{{ session('download_url') }}" class="btn btn-secondary mt-3" download>
                                                    <em class="icon ni ni-download"></em>
                                                    <span>Download Video</span>
                                                </a>
                                            </div>
                                        @endif
                                    @elseif(session('error'))
                                        <div class="alert alert-danger alert-icon">
                                            <em class="icon ni ni-cross-circle"></em> 
                                            <strong>Gagal!</strong> {{ session('error') }}
                                        </div>
                                    @else
                                        <div class="text-center py-5 text-soft">
                                            <em class="icon ni ni-video-fill" style="font-size: 48px;"></em>
                                            <p>Belum ada video yang diproses.</p>
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
</x-app-layout>
