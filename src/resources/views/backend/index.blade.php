<x-app-layout>
    @section('title', 'Dashboard')

    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Dashboard Overview</h3>
                <div class="nk-block-des text-soft">
                    <p>Selamat datang di sistem manajemen Codekarya.</p>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->

    <div class="nk-block">
        <div class="row g-gs">
            <!-- Statistik Card -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group align-start mb-0">
                            <div class="card-title">
                                <h6 class="title">Total Pelanggan</h6>
                            </div>
                        </div>
                        <div class="card-amount">
                            <span class="amount"> 1,250 </span>
                        </div>
                        <div class="invest-data">
                            <div class="invest-data-count">
                                <div class="sub-title">Bulan Ini</div>
                                <div class="amount"> 85 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... baris statistik lainnya bisa ditambahkan ... -->
        </div>
    </div>
</x-app-layout>