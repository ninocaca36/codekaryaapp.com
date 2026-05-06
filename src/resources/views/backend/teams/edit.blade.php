<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Edit Team Member</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('teams.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $team->name) }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="role">Role / Position</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $team->role) }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="description">Short Description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" id="description" name="description">{{ old('description', $team->description) }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="image">Profile Photo</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input" id="image" name="image">
                                                        <label class="form-file-label" for="image">Choose file</label>
                                                    </div>
                                                    @if($team->image)
                                                        <div class="mt-2">
                                                            <img src="{{ (str_starts_with($team->image, 'team/')) ? asset('storage/' . $team->image) : asset('frontend/images/' . $team->image) }}" alt="" style="width: 100px; border-radius: 4px;">
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="order">Display Order</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $team->order) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="facebook">Facebook URL</label>
                                                <input type="url" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $team->facebook) }}" placeholder="https://facebook.com/...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="twitter">Twitter URL</label>
                                                <input type="url" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $team->twitter) }}" placeholder="https://twitter.com/...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="instagram">Instagram URL</label>
                                                <input type="url" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $team->instagram) }}" placeholder="https://instagram.com/...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="linkedin">LinkedIn URL</label>
                                                <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $team->linkedin) }}" placeholder="https://linkedin.com/...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="youtube">YouTube URL</label>
                                                <input type="url" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $team->youtube) }}" placeholder="https://youtube.com/...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="github">GitHub URL</label>
                                                <input type="url" class="form-control" id="github" name="github" value="{{ old('github', $team->github) }}" placeholder="https://github.com/...">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $team->is_active) ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="is_active">Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Update Team Member</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
