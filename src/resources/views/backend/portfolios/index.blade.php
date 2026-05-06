<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Portfolio Management</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Manage your portfolio items displayed on the frontend.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="{{ route('portfolios.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New Item</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Image</span></div>
                                            <div class="nk-tb-col"><span>Title</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Category</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Order</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Status</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools text-end"><span>Action</span></div>
                                        </div><!-- .nk-tb-item -->
                                        
                                        @foreach($portfolios as $item)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <img src="{{ asset($item->image) }}" alt="" style="width: 80px; height: 50px; object-fit: cover; border-radius: 4px;">
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">{{ $item->title }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="sub-text">{{ $item->category }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="sub-text">{{ $item->order }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                @if($item->is_active)
                                                    <span class="badge badge-dot badge-dot-xs bg-success">Active</span>
                                                @else
                                                    <span class="badge badge-dot badge-dot-xs bg-danger">Inactive</span>
                                                @endif
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools text-end">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <a href="{{ route('portfolios.edit', $item->id) }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <em class="icon ni ni-edit-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('portfolios.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
                                        
                                        @if($portfolios->isEmpty())
                                            <div class="nk-tb-item text-center p-4">
                                                <p>No portfolio items found. <a href="{{ route('portfolios.create') }}">Create one now</a>.</p>
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
