<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Team Management</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Manage your team members and their social profiles.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="{{ route('teams.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Team Member</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-icon alert-dismissible mb-4">
                            <em class="icon ni ni-check-circle"></em> <strong>Success!</strong> {{ session('success') }}
                            <button class="close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span class="sub-text">Photo</span></div>
                                            <div class="nk-tb-col"><span class="sub-text">Name / Role</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Social Links</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools text-end"><span class="sub-text">Action</span></div>
                                        </div><!-- .nk-tb-item -->

                                        @foreach($teams as $team)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <img src="{{ (str_starts_with($team->image, 'team/')) ? asset('storage/' . $team->image) : asset('frontend/images/' . ($team->image ?? 'team-1-370x368.jpg')) }}" alt="" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ $team->name }} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{ $team->role }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <ul class="list-inline list-inline-sm">
                                                    @if($team->facebook) <li><em class="icon ni ni-facebook-f text-primary"></em></li> @endif
                                                    @if($team->twitter) <li><em class="icon ni ni-twitter text-info"></em></li> @endif
                                                    @if($team->instagram) <li><em class="icon ni ni-instagram text-danger"></em></li> @endif
                                                    @if($team->linkedin) <li><em class="icon ni ni-linkedin text-primary"></em></li> @endif
                                                    @if($team->youtube) <li><em class="icon ni ni-youtube-fill text-danger"></em></li> @endif
                                                    @if($team->github) <li><em class="icon ni ni-github text-dark"></em></li> @endif
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                @if($team->is_active)
                                                    <span class="badge badge-dot badge-dot-xs bg-success">Active</span>
                                                @else
                                                    <span class="badge badge-dot badge-dot-xs bg-danger">Inactive</span>
                                                @endif
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools text-end">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <em class="icon ni ni-edit-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('teams.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-trigger btn-icon text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <em class="icon ni ni-trash-fill"></em>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @endforeach

                                        @if($teams->isEmpty())
                                            <div class="nk-tb-item text-center p-4">
                                                <p>No team members found. <a href="{{ route('teams.create') }}">Add one now</a>.</p>
                                            </div>
                                        @endif
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
