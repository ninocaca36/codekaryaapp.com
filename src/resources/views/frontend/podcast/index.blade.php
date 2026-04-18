<x-frontend-layout>
    <style>
        .podcast-card {
            transition: all 0.3s ease;
            border: none;
            background: transparent;
        }
        .podcast-card:hover {
            transform: translateY(-5px);
        }
        .thumbnail-container {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 16/9;
        }
        .thumbnail-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .badge-live {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #ff0000;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }
        .badge-duration {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 12px;
        }
        .podcast-info {
            padding: 12px 0;
        }
        .podcast-title {
            font-size: 16px;
            font-weight: bold;
            line-height: 1.4;
            margin-bottom: 5px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            color: #1a1a1a;
        }
        .podcast-meta {
            font-size: 14px;
            color: #606060;
        }
    </style>

    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-primary-darker novi-bg novi-bg-img">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Podcast & Streaming</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Karya</a></li>
                <li class="active">Podcast</li>
            </ul>
        </div>
    </section>

    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row row-fix mb-5">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>Trending <span class="text-primary font-weight-bold">Podcasts</span></h3>
                    <div class="nav-filters">
                        <button class="btn btn-sm btn-primary">Semua</button>
                        <button class="btn btn-sm btn-outline-primary ml-2">Sedang Live</button>
                        <button class="btn btn-sm btn-outline-primary ml-2">Terpopuler</button>
                    </div>
                </div>
            </div>

            <div class="row row-40">
                @foreach($podcasts as $podcast)
                <div class="col-sm-6 col-lg-3 wow-outer">
                    <div class="podcast-card wow slideInUp">
                        <a href="#" class="thumbnail-link">
                            <div class="thumbnail-container">
                                <img src="{{ $podcast['thumbnail'] }}" alt="{{ $podcast['title'] }}">
                                @if($podcast['is_live'])
                                    <div class="badge-live">
                                        <span class="dot" style="width: 8px; height: 8px; background: white; border-radius: 50%;"></span>
                                        LIVE
                                    </div>
                                @endif
                                <div class="badge-duration">{{ $podcast['is_live'] ? 'Streaming' : '15:20' }}</div>
                            </div>
                        </a>
                        <div class="podcast-info">
                            <a href="#" class="podcast-title">{{ $podcast['title'] }}</a>
                            <div class="podcast-meta">
                                <div>{{ $podcast['author'] }}</div>
                                <div>{{ $podcast['views'] }} views • {{ $podcast['time'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- YouTube Like Sidebar Mockup -->
            <div class="mt-5 pt-5 border-top">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mb-4">Kategori Podcast</h4>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge badge-pill badge-light p-3 px-4 m-1">Teknologi</span>
                            <span class="badge badge-pill badge-light p-3 px-4 m-1">Bisnis</span>
                            <span class="badge badge-pill badge-light p-3 px-4 m-1">Hiburan</span>
                            <span class="badge badge-pill badge-light p-3 px-4 m-1">Edukasi</span>
                            <span class="badge badge-pill badge-light p-3 px-4 m-1">Kesehatan</span>
                            <span class="badge badge-pill badge-light p-3 px-4 m-1">Gaya Hidup</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
