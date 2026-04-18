<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Manajemen Blog</h3>
                        <div class="nk-block-des text-soft">
                            <p>Anda memiliki total {{ $posts->total() }} artikel.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-target="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="nk-block-tools-opt">
                                        <a href="{{ route('blog.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah Artikel</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                @if(session('success'))
                    <div class="alert alert-success alert-icon mb-4">
                        <em class="icon ni ni-check-circle"></em> {{ session('success') }}
                    </div>
                @endif

                <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                        <div class="card-inner p-0">
                            <div class="nk-tb-list nk-tb-ulist">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col"><span class="sub-text">Judul</span></div>
                                    <div class="nk-tb-col tb-col-mb"><span class="sub-text">Kategori</span></div>
                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Penulis</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Tanggal</span></div>
                                    <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                </div>

                                @foreach($posts as $post)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col">
                                        <span class="tb-lead">{{ $post->title }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="badge badge-dim bg-primary">{{ $post->category }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>{{ $post->author->name }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>{{ $post->created_at->format('d M Y') }}</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="{{ route('frontend.blog.show', $post->slug) }}" target="_blank"><em class="icon ni ni-eye"></em><span>Lihat</span></a></li>
                                                            <li><a href="{{ route('blog.edit', $post->id) }}"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <form action="{{ route('blog.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="text-danger border-0 bg-transparent p-0 ms-3"><em class="icon ni ni-trash"></em><span> Hapus</span></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-inner">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
