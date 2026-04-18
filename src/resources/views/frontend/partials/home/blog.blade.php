<!-- Latest Blog Posts-->
<section class="section section-lg text-center novi-bg novi-bg-img">
    <div class="container">
      <h3 class="wow-outer"><span class="wow slideInDown">Berita & Artikel Terbaru</span></h3>
      <div class="row row-30">
        @forelse($latestPosts as $post)
        <div class="col-md-6 wow-outer">
          <!-- Post Modern-->
          <article class="post-modern wow slideInLeft">
            <a class="post-modern-media" href="{{ route('frontend.blog.show', $post->slug) }}">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=571&auto=format&fit=crop" alt="" width="571" height="353"/>
            </a>
            <h4 class="post-modern-title"><a href="{{ route('frontend.blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
            <ul class="post-modern-meta">
              <li>by {{ $post->author->name }}</li>
              <li>
                <time datetime="{{ $post->created_at->format('Y') }}">{{ $post->created_at->format('M d, Y') }}</time>
              </li>
              <li><a class="button-winona" href="#">{{ $post->category }}</a></li>
            </ul>
            <p>{{ Str::limit($post->content, 150) }}</p>
          </article>
        </div>
        @empty
        <!-- Fallback Static Content if DB empty -->
        <div class="col-md-6 wow-outer">
          <article class="post-modern wow slideInLeft">
            <a class="post-modern-media" href="#"><img src="{{ asset('frontend/images/grid-blog-1-571x353.jpg') }}" alt="" width="571" height="353"/></a>
            <h4 class="post-modern-title"><a href="#">10 Digital Marketing Mistakes to Avoid</a></h4>
            <ul class="post-modern-meta">
              <li>by Theresa Barnes</li>
              <li><time datetime="2019">Apr 21, 2019</time></li>
              <li><a class="button-winona" href="#">News</a></li>
            </ul>
            <p>Though managing your digital marketing campaign may seem easy, you can encounter some complexities.</p>
          </article>
        </div>
        <div class="col-md-6 wow-outer">
          <article class="post-modern wow slideInLeft">
            <a class="post-modern-media" href="#"><img src="{{ asset('frontend/images/grid-blog-2-571x353.jpg') }}" alt="" width="571" height="353"/></a>
            <h4 class="post-modern-title"><a href="#">Where Marketers Need to Succeed</a></h4>
            <ul class="post-modern-meta">
              <li>by Theresa Barnes</li>
              <li><time datetime="2019">Apr 21, 2019</time></li>
              <li><a class="button-winona" href="#">News</a></li>
            </ul>
            <p>Being a successful marketer today might appear to require a never-ending list of skills.</p>
          </article>
        </div>
        @endforelse
      </div>
      <div class="wow-outer button-outer">
        <a class="button button-primary-outline button-winona wow slideInUp" href="{{ route('frontend.blog.index') }}">Lihat Semua Artikel</a>
      </div>
    </div>
</section>
