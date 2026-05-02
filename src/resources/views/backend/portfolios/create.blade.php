<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">{{ isset($portfolio) ? 'Edit Portfolio' : 'Add New Portfolio' }}</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('portfolios.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="{{ isset($portfolio) ? route('portfolios.update', $portfolio->id) : route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @isset($portfolio) @method('PATCH') @endisset

                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="title">Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $portfolio->title ?? '') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="category">Category</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $portfolio->category ?? '') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="image">Image</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input" id="image" name="image" {{ isset($portfolio) ? '' : 'required' }}>
                                                        <label class="form-file-label" for="image">Choose file</label>
                                                    </div>
                                                    @if(isset($portfolio) && $portfolio->image)
                                                        <div class="mt-2">
                                                            <img src="{{ asset($portfolio->image) }}" alt="" style="width: 100px; border-radius: 4px;">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="link">Link (URL)</label>
                                                <div class="form-control-wrap">
                                                    <input type="url" class="form-control" id="link" name="link" value="{{ old('link', $portfolio->link ?? '') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="order">Display Order</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $portfolio->order ?? 0) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $portfolio->is_active ?? 1) ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="is_active">Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">{{ isset($portfolio) ? 'Update Portfolio' : 'Save Portfolio' }}</button>
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
