<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Creative Music Space</h3>
                        <div class="nk-block-des text-soft">
                            <p>Nikmati karya video pendek dan ruang karaoke kreatif.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ route('music.karaoke') }}" class="btn btn-primary">
                            <em class="icon ni ni-mic-fill"></em>
                            <span>Buka Ruang Karaoke</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="row g-gs">
                    @foreach($videos as $video)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-bordered h-100">
                            <div class="card-inner p-0">
                                <div class="nk-video-wrap">
                                    <video controls class="w-100 rounded-top" style="max-height: 400px; background: #000;">
                                        <source src="{{ $video['url'] }}" type="video/mp4">
                                        Browser Anda tidak mendukung tag video.
                                    </video>
                                </div>
                                <div class="p-3">
                                    <h6 class="title">{{ $video['title'] }}</h6>
                                    <div class="d-flex align-center justify-between mt-1">
                                        <span class="text-soft small">Oleh: {{ $video['author'] }}</span>
                                        <div class="d-flex align-center g-2">
                                            <a href="#" class="text-soft"><em class="icon ni ni-heart"></em></a>
                                            <a href="#" class="text-soft"><em class="icon ni ni-share"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
