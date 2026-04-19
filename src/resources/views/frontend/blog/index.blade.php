

<x-frontend-layout>
    <!-- Breadcrumbs-->
   <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img" data-preset='{"title":"Breadcrumbs Classic","category":"header","reload":false,"id":"breadcrumbs-classic"}'>
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Blog</h6>
              <h1 class="breadcrumbs-custom-title">Informasi & Insights dari Codekarya</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Blog</li>
            </ul>
          </div>
        </div>
      </section>
    <!-- Blog Section -->
    <section class="section section-lg novi-bg novi-bg-img">
        <div class="container">
            <article class="blog-layout">
                <div class="blog-layout-main">
                    <div class="row row-30">
                        @forelse($posts as $post)
                        <div class="col-sm-6 mb-4">
                            <!-- Post Classic-->
                            <article class="post-classic">
                                <a class="post-classic-media" href="{{ route('frontend.blog.show', $post->slug) }}">
                                    <img src="{{ $post->image_url ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600' }}" alt="{{ $post->title }}">
                                </a>
                                <div class="post-classic-body">
                                    <ul class="post-classic-meta">
                                        <li><span class="badge">Article</span></li>
                                        <li><time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('M d, Y') }}</time></li>
                                    </ul>
                                    <h4 class="post-classic-title">
                                        <a href="{{ route('frontend.blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h4>
                                    <p class="text-muted small">{{ Str::limit(strip_tags($post->content), 120) }}</p>
                                </div>
                            </article>
                        </div>
                        @empty
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">Belum ada postingan yang ditemukan.</p>
                        </div>
                        @endforelse
                    </div>

                    <div class="d-flex justify-content-center py-4">
                        {{ $posts->links() }}
                    </div>
                </div>

                <div class="blog-layout-aside">
                    <div class="blog-layout-aside-item">
                        <p class="blog-layout-aside-title">Search Blog</p>
                        <form class="rd-form rd-search rd-search-classic" action="#" method="GET">
                            <div class="form-wrap w-100">
                                <input class="form-input" id="rd-search-form-input" type="text" name="s" placeholder="Cari artikel...">
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="blog-layout-aside-item">
                        <p class="blog-layout-aside-title">About Codekarya</p>
                        <p class="text-muted small">Codekarya adalah tempat kolaborasi bagi programmer dan konten kreator untuk melahirkan karya digital yang bermakna dan profesional.</p>
                    </div>

                    <div class="blog-layout-aside-item">
                        <p class="blog-layout-aside-title">Categories</p>
                        <ul class="list-marked">
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Tips & Trick</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>

                    <div class="blog-layout-aside-item">
                        <p class="blog-layout-aside-title">Tags</p>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach(['Code', 'Creative', 'Dev', 'Career', 'Tech'] as $tag)
                            <a href="#" class="badge badge-light border text-muted p-2">{{ $tag }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</x-frontend-layout>