<x-app-layout>
    @section('title', 'User Details')

    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">User Details: {{ $user->name }}</h3>
                <div class="nk-block-des text-soft">
                    <p>Detailed overview of the user account.</p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="{{ route('users.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back to List</span></a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary d-none d-sm-inline-flex ms-2"><em class="icon ni ni-edit"></em><span>Edit User</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="row g-gs">
                    <div class="col-md-6">
                        <div class="user-card user-card-lg">
                            <div class="user-avatar bg-primary">
                                <span>{{ strtoupper(substr($user->name, 0, 2)) }}</span>
                            </div>
                            <div class="user-info">
                                <span class="lead-text">{{ $user->name }}</span>
                                <span class="sub-text">{{ $user->email }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <span class="badge badge-pill badge-outline-primary">{{ $user->roles->pluck('name')->implode(', ') ?: 'No Role' }}</span>
                    </div>
                </div>
                
                <div class="nk-divider divider md"></div>
                
                <div class="row g-3">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label text-soft">Email Status</label>
                            <div class="form-control-wrap">
                                @if($user->email_verified_at)
                                    <span class="badge badge-dot bg-success">Verified ({{ $user->email_verified_at->format('d M Y') }})</span>
                                @else
                                    <span class="badge badge-dot bg-danger">Unverified</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label text-soft">Diamonds Balance</label>
                            <div class="form-control-wrap">
                                <span class="fw-bold text-primary"><em class="icon ni ni-diamond"></em> {{ $user->diamonds ?? 0 }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label text-soft">Joined At</label>
                            <div class="form-control-wrap">
                                <span>{{ $user->created_at->format('d M Y, H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
