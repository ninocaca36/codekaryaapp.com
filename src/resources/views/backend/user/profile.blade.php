<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Profil Saya</h3>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Informasi Pribadi</h4>
                                        <p>Kelola data diri dan status kreator Anda.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Level Status Bar -->
                            <div class="nk-block mb-5">
                                <div class="card bg-lighter border-0">
                                    <div class="card-inner">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Level Kreator: <span class="text-primary">Level {{ $level }}</span></h6>
                                            <span class="badge badge-dim bg-primary">VIP Member</span>
                                        </div>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: {{ $progress }}%">{{ round($progress) }}%</div>
                                        </div>
                                        <p class="small text-soft mt-2">Kumpulkan Diamond lebih banyak untuk naik ke Level {{ $level + 1 }}!</p>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('user.profile.update') }}" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nomor HP</label>
                                            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="Contoh: 08123456789">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Biodata / Tentang Saya</label>
                                            <textarea name="bio" class="form-control" rows="3">{{ $user->bio }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="card-inner-group" data-simplebar>
                                <div class="card-inner">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary">
                                            <span>{{ substr($user->name, 0, 2) }}</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{ $user->name }}</span>
                                            <span class="sub-text">{{ $user->email }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0">
                                    <ul class="link-list-menu">
                                        <li><a class="active" href="{{ route('user.profile') }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                    </ul>
                                </div>
                                
                                <!-- Uploaded Files List -->
                                <div class="card-inner">
                                    <h6 class="overline-title-alt mb-2">File Saya</h6>
                                    <ul class="link-list-opt no-bdr">
                                        @foreach($userFiles as $file)
                                        <li class="p-1 border-bottom">
                                            <div class="d-flex align-center">
                                                <em class="icon ni ni-{{ $file['type'] == 'Video' ? 'play-circle' : ($file['type'] == 'Audio' ? 'music' : 'file-text') }} text-primary me-2"></em>
                                                <div class="user-info">
                                                    <span class="sub-text small fw-bold">{{ $file['name'] }}</span>
                                                    <span class="sub-text smaller">{{ $file['date'] }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
