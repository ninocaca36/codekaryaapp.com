<x-app-layout>
    <!-- content @s -->
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <!-- Page Header -->
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Statistik Pengunjung</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Pantau siapa saja yang mengunjungi website Anda secara real-time.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('dashboard') }}" class="btn btn-outline-light bg-white">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Kembali</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Summary Cards -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <!-- Total Visits -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Total Kunjungan</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="icon ni ni-activity-round-fill text-primary" style="font-size:1.5rem;"></em>
                                                </div>
                                            </div>
                                            <div class="data mt-2">
                                                <div class="data-group">
                                                    <div class="amount h3 text-primary">{{ number_format($totalVisits) }}</div>
                                                </div>
                                                <div class="info text-soft">Semua waktu</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Today -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Kunjungan Hari Ini</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="icon ni ni-today text-success" style="font-size:1.5rem;"></em>
                                                </div>
                                            </div>
                                            <div class="data mt-2">
                                                <div class="data-group">
                                                    <div class="amount h3 text-success">{{ number_format($todayVisits) }}</div>
                                                </div>
                                                <div class="info text-soft">{{ now()->format('d M Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- This Month -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Kunjungan Bulan Ini</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="icon ni ni-calender-date text-warning" style="font-size:1.5rem;"></em>
                                                </div>
                                            </div>
                                            <div class="data mt-2">
                                                <div class="data-group">
                                                    <div class="amount h3 text-warning">{{ number_format($monthVisits) }}</div>
                                                </div>
                                                <div class="info text-soft">{{ now()->format('F Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Unique -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">IP Unik</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="icon ni ni-user-alt text-danger" style="font-size:1.5rem;"></em>
                                                </div>
                                            </div>
                                            <div class="data mt-2">
                                                <div class="data-group">
                                                    <div class="amount h3 text-danger">{{ number_format($uniqueVisitors) }}</div>
                                                </div>
                                                <div class="info text-soft">Pengunjung unik</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Summary Cards -->

                    <!-- Charts + Stats Row -->
                    <div class="nk-block mt-4">
                        <div class="row g-gs">
                            <!-- Daily Chart (14 days) -->
                            <div class="col-lg-8">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Kunjungan 14 Hari Terakhir</h6>
                                            </div>
                                        </div>
                                        <div style="position:relative; height:250px;">
                                            <canvas id="dailyVisitsChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Browser & Device Stats -->
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Browser Teratas</h6>
                                            </div>
                                        </div>
                                        <ul class="nk-store-statistics">
                                            @forelse($browsers as $browser)
                                            <li class="item">
                                                <div class="info">
                                                    <div class="title">{{ $browser->browser ?: 'Unknown' }}</div>
                                                    <div class="count text-primary">{{ number_format($browser->total) }}</div>
                                                </div>
                                                <em class="icon bg-primary-dim ni ni-globe"></em>
                                            </li>
                                            @empty
                                            <li class="item"><div class="info"><div class="title text-soft">Belum ada data</div></div></li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Platform + Top Pages Row -->
                    <div class="nk-block mt-4">
                        <div class="row g-gs">
                            <!-- Platform -->
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Platform / OS</h6>
                                            </div>
                                        </div>
                                        <ul class="nk-store-statistics">
                                            @forelse($platforms as $platform)
                                            <li class="item">
                                                <div class="info">
                                                    <div class="title">{{ $platform->platform ?: 'Unknown' }}</div>
                                                    <div class="count text-info">{{ number_format($platform->total) }}</div>
                                                </div>
                                                <em class="icon bg-info-dim ni ni-monitor"></em>
                                            </li>
                                            @empty
                                            <li class="item"><div class="info"><div class="title text-soft">Belum ada data</div></div></li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Device Types -->
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Jenis Perangkat</h6>
                                            </div>
                                        </div>
                                        <ul class="nk-store-statistics">
                                            @forelse($devices as $device)
                                            <li class="item">
                                                <div class="info">
                                                    <div class="title">{{ $device->device ?: 'Unknown' }}</div>
                                                    <div class="count text-warning">{{ number_format($device->total) }}</div>
                                                </div>
                                                <em class="icon bg-warning-dim ni ni-mobile"></em>
                                            </li>
                                            @empty
                                            <li class="item"><div class="info"><div class="title text-soft">Belum ada data</div></div></li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Top Pages -->
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Halaman Terpopuler</h6>
                                            </div>
                                        </div>
                                        <ul class="nk-store-statistics">
                                            @forelse($topPages as $page)
                                            <li class="item">
                                                <div class="info">
                                                    <div class="title" style="font-size:0.8rem; word-break:break-all;">
                                                        {{ parse_url($page->url, PHP_URL_PATH) ?: '/' }}
                                                    </div>
                                                    <div class="count text-purple">{{ number_format($page->total) }}</div>
                                                </div>
                                                <em class="icon bg-purple-dim ni ni-link"></em>
                                            </li>
                                            @empty
                                            <li class="item"><div class="info"><div class="title text-soft">Belum ada data</div></div></li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Visitors Table -->
                    <div class="nk-block mt-4">
                        <div class="card card-full">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Kunjungan Terbaru</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-list">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col"><span>Waktu</span></div>
                                    <div class="nk-tb-col tb-col-sm"><span>IP Address</span></div>
                                    <div class="nk-tb-col tb-col-md"><span>Browser</span></div>
                                    <div class="nk-tb-col tb-col-md"><span>Platform</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span>URL</span></div>
                                    <div class="nk-tb-col tb-col-sm"><span>Device</span></div>
                                </div>
                                @forelse($recentVisits as $visit)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col">
                                        <span class="tb-sub">{{ $visit->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span class="tb-lead">{{ $visit->ip ?? '-' }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="badge badge-dim bg-outline-primary">{{ $visit->browser ?? 'Unknown' }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">{{ $visit->platform ?? '-' }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-sub" style="font-size:0.8rem; word-break:break-all;">
                                            {{ parse_url($visit->url, PHP_URL_PATH) ?: '/' }}
                                        </span>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        @php
                                            $deviceIcon = match(strtolower($visit->device ?? '')) {
                                                'mobile' => 'ni-mobile',
                                                'tablet' => 'ni-tablet',
                                                default  => 'ni-monitor',
                                            };
                                        @endphp
                                        <em class="icon ni {{ $deviceIcon }} text-soft" title="{{ $visit->device ?? 'Desktop' }}"></em>
                                    </div>
                                </div>
                                @empty
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col" colspan="6">
                                        <span class="text-soft">Belum ada data kunjungan.</span>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        const dailyLabels = @json($dailyVisits->pluck('date'));
        const dailyData   = @json($dailyVisits->pluck('total'));

        const ctx = document.getElementById('dailyVisitsChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: dailyLabels,
                datasets: [{
                    label: 'Kunjungan',
                    data: dailyData,
                    borderColor: '#6576ff',
                    backgroundColor: 'rgba(101,118,255,0.12)',
                    borderWidth: 2.5,
                    pointRadius: 4,
                    pointBackgroundColor: '#6576ff',
                    fill: true,
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, ticks: { stepSize: 1 } },
                    x: { ticks: { maxRotation: 45 } }
                }
            }
        });
    </script>
    @endpush
</x-app-layout>
