<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Tambah Artikel Baru</h3>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ route('blog.store') }}" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-label">Judul Artikel</label>
                                        <input type="text" name="title" class="form-control" required placeholder="Masukkan judul artikel">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select name="category" class="form-select">
                                            <option value="News">News</option>
                                            <option value="Tutorial">Tutorial</option>
                                            <option value="Update">Update</option>
                                            <option value="Tips">Tips</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Konten</label>
                                        <textarea name="content" class="form-control" rows="15" required placeholder="Tulis artikel Anda di sini..."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Terbitkan Artikel</button>
                                    <a href="{{ route('blog.index') }}" class="btn btn-outline-light">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
