<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Roles & Permissions Management</h3>
                        <div class="nk-block-des text-soft">
                            <p>Manage application roles and their associated permissions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="row g-gs">
                    <!-- Roles List -->
                    <div class="col-lg-6">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-3">
                                    <div class="card-title">
                                        <h6 class="title">Roles</h6>
                                    </div>
                                    <div class="card-tools">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalRole">Add Role</button>
                                    </div>
                                </div>
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span>Role Name</span></div>
                                        <div class="nk-tb-col"><span>Permissions</span></div>
                                    </div>
                                    @foreach($roles as $role)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="text-primary fw-bold">{{ ucfirst($role->name) }}</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            @foreach($role->permissions as $perm)
                                                <span class="badge badge-dim bg-outline-primary sm">{{ $perm->name }}</span>
                                            @endforeach
                                            <button class="btn btn-trigger btn-icon text-primary" data-bs-toggle="modal" data-bs-target="#modalAssign{{ $role->id }}">
                                                <em class="icon ni ni-edit-fill"></em>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Modal Assign Permissions -->
                                    <div class="modal fade" id="modalAssign{{ $role->id }}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('assign-permissions') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="role_id" value="{{ $role->id }}">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Assign Permissions to {{ ucfirst($role->name) }}</h5>
                                                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            @foreach($permissions as $permission)
                                                            <div class="col-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" class="custom-control-input" id="perm{{ $role->id }}{{ $permission->id }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="perm{{ $role->id }}{{ $permission->id }}">{{ $permission->name }}</label>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Permissions List -->
                    <div class="col-lg-6">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-3">
                                    <div class="card-title">
                                        <h6 class="title">Permissions</h6>
                                    </div>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalPermission">Add Permission</button>
                                    </div>
                                </div>
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span>Permission Name</span></div>
                                    </div>
                                    @foreach($permissions as $permission)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span>{{ $permission->name }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Role -->
    <div class="modal fade" id="modalRole">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Role</h5>
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Role Name</label>
                            <input type="text" name="name" class="form-input" placeholder="e.g. editor" required>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="submit" class="btn btn-primary">Create Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Add Permission -->
    <div class="modal fade" id="modalPermission">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Permission</h5>
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Permission Name</label>
                            <input type="text" name="name" class="form-input" placeholder="e.g. edit posts" required>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="submit" class="btn btn-primary">Create Permission</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
