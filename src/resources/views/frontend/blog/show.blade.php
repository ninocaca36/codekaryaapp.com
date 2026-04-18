<x-frontend-layout>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-primary-darker novi-bg novi-bg-img">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">{{ $post->title }}</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('frontend.blog.index') }}">Blog</a></li>
                <li class="active">Detail</li>
            </ul>
        </div>
    </section>

    <!-- Post Detail -->
    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <article class="post-single">
                        <div class="post-single-header mb-4">
                            <div class="post-classic-time mb-2">
                                <span class="icon mdi mdi-calendar-text text-primary"></span> {{ $post->created_at->format('M d, Y') }} at {{ $post->created_at->format('h:i a') }}
                            </div>
                            <h3>{{ $post->title }}</h3>
                            <div class="post-single-meta mt-2">
                                <span class="text-soft">by <b>{{ $post->author->name }}</b></span>
                                <span class="badge badge-dim bg-primary ml-2">{{ $post->category }}</span>
                            </div>
                        </div>
                        
                        <div class="post-single-media mb-5">
                            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1200&auto=format&fit=crop" class="w-100 rounded" alt="">
                        </div>

                        <div class="post-single-content" style="font-size: 18px; line-height: 1.8; color: #444;">
                            {!! nl2br(e($post->content)) !!}
                        </div>

                        <div class="post-single-footer mt-5 pt-5 border-top">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h5 class="mb-0">Bagikan artikel ini:</h5>
                                    <div class="group-sm mt-2">
                                        <a class="icon icon-sm icon-circle icon-filled icon-facebook mdi mdi-facebook" href="#"></a>
                                        <a class="icon icon-sm icon-circle icon-filled icon-twitter mdi mdi-twitter" href="#"></a>
                                        <a class="icon icon-sm icon-circle icon-filled icon-linkedin mdi mdi-linkedin" href="#"></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-right mt-4 mt-sm-0">
                                    <a href="{{ route('frontend.blog.index') }}" class="button button-primary button-winona">Kembali ke Blog</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
