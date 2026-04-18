<x-app-layout>
    @section('title', 'User List')
    
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Users Lists</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{ $users->total() }} users.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add User</span></a></li>
                        </ul>
                    </div>
                </div><!-- .toggle-wrap -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->

    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner p-0">
                    <div class="nk-tb-list nk-tb-ulist">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col"><span class="sub-text">User</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Role</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Diamonds</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Email Verified</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></div>
                            <div class="nk-tb-col nk-tb-col-tools text-end">
                            </div>
                        </div><!-- .nk-tb-item -->
                        
                        @foreach($users as $user)
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <div class="user-card">
                                    <div class="user-avatar bg-primary">
                                        <span>{{ strtoupper(substr($user->name, 0, 2)) }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="tb-lead">{{ $user->name }} <span class="dot dot-success d-md-none ms-1"></span></span>
                                        <span>{{ $user->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-mb">
                                @if($user->roles->count() > 0)
                                    @foreach($user->roles as $role)
                                        <span class="badge badge-pill badge-outline-primary text-capitalize">{{ $role->name }}</span>
                                    @endforeach
                                @else
                                    <span class="badge badge-pill badge-outline-light">No Role</span>
                                @endif
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="fw-bold text-primary"><em class="icon ni ni-diamond"></em> {{ $user->diamonds ?? 0 }}</span>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                @if($user->email_verified_at)
                                    <span class="badge badge-dot bg-success">Verified</span>
                                @else
                                    <span class="badge badge-dot bg-danger">Unverified</span>
                                @endif
                            </div>
                            <div class="nk-tb-col tb-col-lg">
                                <span>{{ $user->created_at->format('d M Y') }}</span>
                            </div>
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit User</span></a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete User</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @endforeach

                    </div><!-- .nk-tb-list -->
                </div><!-- .card-inner -->
                <div class="card-inner">
                    <div class="nk-block-between-md g-3">
                        <div class="g">
                            {{ $users->links() }}
                        </div>
                    </div><!-- .nk-block-between -->
                </div><!-- .card-inner -->
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
</x-app-layout>
