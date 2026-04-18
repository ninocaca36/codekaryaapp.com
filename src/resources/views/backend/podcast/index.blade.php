<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Podcast & Streaming Space</h3>
                        <div class="nk-block-des text-soft">
                            <p>Kelola siaran langsung dan rekaman podcast Anda di sini.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-target="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-video-fill"></em><span>Mulai Live Streaming</span></a></li>
                                    <li class="nk-block-tools-opt">
                                        <a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Upload Podcast</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .toggle-wrap -->
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->

            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-md-4">
                        <div class="card card-bordered card-full">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-3">
                                    <div class="card-title">
                                        <h6 class="subtitle">Statistik Podcast</h6>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="p-2 border rounded">
                                            <span class="sub-text">Total Video</span>
                                            <span class="h4">24</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 border rounded">
                                            <span class="sub-text">Total View</span>
                                            <span class="h4">12.5K</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <h6 class="title">Status Siaran Terakhir</h6>
                                <div class="mt-3">
                                    <div class="alert alert-fill alert-danger alert-icon">
                                        <em class="icon ni ni-video-fill"></em> <strong>Offline</strong>. Siaran terakhir berakhir 2 jam yang lalu.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="nk-block mt-4">
                <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h5 class="title">Daftar Konten Podcast</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-inner p-0">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class="">ID</span></th>
                                        <th class="tb-tnx-info">Judul Podcast</th>
                                        <th class="tb-tnx-amount"><span class="">Views</span></th>
                                        <th class="tb-tnx-status">Status</th>
                                        <th class="tb-tnx-action"><span>&nbsp;</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">#001</td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Masa Depan AI di Indonesia</span>
                                            </div>
                                            <div class="tb-tnx-date">15 Apr 2024</div>
                                        </td>
                                        <td class="tb-tnx-amount">1,200</td>
                                        <td class="tb-tnx-status">
                                            <span class="badge badge-dot bg-success">Published</span>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
