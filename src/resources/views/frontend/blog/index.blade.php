<x-frontend-layout>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-primary-darker novi-bg novi-bg-img">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Blog & Berita</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </section>

    <!-- Blog Listing -->
    <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-50 justify-content-center">
                @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 wow-outer">
                    <article class="post-classic wow slideInLeft">
                        <div class="post-classic-media">
                            <a href="{{ route('frontend.blog.show', $post->slug) }}">
                                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=800&auto=format&fit=crop" alt="" width="370" height="240"/>
                            </a>
                        </div>
                        <div class="post-classic-content mt-3">
                            <div class="post-classic-time">
                                <span class="icon mdi mdi-calendar-text text-primary"></span> {{ $post->created_at->format('M d, Y') }}
                            </div>
                            <h5 class="post-classic-title"><a href="{{ route('frontend.blog.show', $post->slug) }}">{{ $post->title }}</a></h5>
                            <p class="post-classic-text">{{ Str::limit($post->content, 120) }}</p>
                            <div class="post-classic-footer">
                                <span class="post-classic-author">by {{ $post->author->name }}</span>
                                <span class="badge badge-dim bg-primary ml-2">{{ $post->category }}</span>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>

            <div class="pagination-wrap mt-5">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</x-frontend-layout>
