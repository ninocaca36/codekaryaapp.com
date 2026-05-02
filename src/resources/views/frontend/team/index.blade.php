<x-frontend-layout>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img" data-preset='{"title":"Breadcrumbs Classic","category":"header","reload":false,"id":"breadcrumbs-classic"}'>
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">About Us</h6>
                    <h1 class="breadcrumbs-custom-title">Our Team</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Team</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Team Members Section -->
    <section class="section section-lg section-last text-center bg-default novi-bg novi-bg-img" data-preset='{"title":"Team 3 Column Layout","category":"team","id":"team-3-column-layout"}'>
        <div class="container">
            <h3 class="wow-outer text-center"><span class="wow slideInDown">The Creative Minds Behind Codekarya</span></h3>
            <p class="wow-outer"><span class="text-width-1 wow slideInUp">Meet our talented team of developers, designers, and visionaries dedicated to building the future of digital creativity.</span></p>
            
            <div class="row row-30 row-md-50 justify-content-center offset-top-2">
                @foreach($teams as $index => $team)
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Profile Classic-->
                    <article class="profile-classic wow slideInLeft" data-wow-delay="{{ $index * 0.05 }}s">
                        <div class="profile-classic-main">
                            <img class="profile-classic-image" src="{{ (isset($team->image) && str_starts_with($team->image, 'team/')) ? asset('storage/' . $team->image) : asset('frontend/images/' . ($team->image ?? 'team-1-370x368.jpg')) }}" alt="{{ $team->name }}" width="370" height="368"/>
                            <div class="profile-classic-caption">
                                <div class="group group-xs group-middle">
                                    @if($team->facebook)
                                        <a class="icon icon-sm icon-creative mdi mdi-facebook" href="{{ $team->facebook }}"></a>
                                    @endif
                                    @if($team->twitter)
                                        <a class="icon icon-sm icon-creative mdi mdi-twitter" href="{{ $team->twitter }}"></a>
                                    @endif
                                    @if($team->instagram)
                                        <a class="icon icon-sm icon-creative mdi mdi-instagram" href="{{ $team->instagram }}"></a>
                                    @endif
                                    @if($team->linkedin)
                                        <a class="icon icon-sm icon-creative mdi mdi-linkedin" href="{{ $team->linkedin }}"></a>
                                    @endif
                                    @if($team->youtube)
                                        <a class="icon icon-sm icon-creative mdi mdi-youtube" href="{{ $team->youtube }}"></a>
                                    @endif
                                    @if($team->github)
                                        <a class="icon icon-sm icon-creative mdi mdi-github" href="{{ $team->github }}"></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <h4 class="profile-classic-title">{{ $team->name }}</h4>
                        <p class="profile-classic-position text-primary">{{ $team->role }}</p>
                        <p class="profile-classic-text px-3">{{ $team->description ?? '' }}</p>
                    </article>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="section section-lg bg-gray-100 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h3 class="wow-outer"><span class="wow slideInUp">Join Our Creative Journey</span></h3>
                    <p class="wow-outer offset-top-3"><span class="wow slideInDown">We are always looking for creative minds and talented developers to join our growing community. Whether you are an expert in code or a visionary in digital art, there's a place for you at Codekarya.</span></p>
                    <div class="wow-outer button-outer offset-top-4">
                        <a class="button button-lg button-primary button-winona wow slideInUp" href="{{ route('frontend.kontak.index') }}">Start a Conversation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners / Clients (Optional Premium Touch) -->
    <section class="section section-sm bg-default">
        <div class="container">
            <div class="owl-carousel owl-clients" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-margin="30" data-dots="false" data-nav="false" data-loop="true" data-autoplay="true">
                <a class="link-image" href="#"><img src="{{ asset('frontend/images/logo-brownie-103x61.png') }}" alt="" width="103" height="61"/></a>
                <a class="link-image" href="#"><img src="{{ asset('frontend/images/logo-hillplan-111x85.png') }}" alt="" width="111" height="85"/></a>
                <a class="link-image" href="#"><img src="{{ asset('frontend/images/logo-the-oldbrand-134x104.png') }}" alt="" width="134" height="104"/></a>
                <a class="link-image" href="#"><img src="{{ asset('frontend/images/logo-havana-cabana-132x87.png') }}" alt="" width="132" height="87"/></a>
            </div>
        </div>
    </section>
</x-frontend-layout>
