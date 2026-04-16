 <x-frontend-layout>
      @include('frontend.partials.home.services')
      <!-- A Few Words About Us-->
      <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
       @include('frontend.partials.home.about')
      </section>
      <!-- CTA Thin-->
      <section class="section section-xs bg-primary-darker text-center novi-bg novi-bg-img">
        <div class="container">
          <div class="row row-fix justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight">Learn the Cost of your <span class="font-weight-bold">Marketing Campaign</span> Right Now!</span></h4><a class="button button-primary button-winona" href="pricing.html">View all pricing</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Katalog Layanan -->
      @include('frontend.partials.home.team')
      <!-- Testimonials-->
      <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
        <div class="container">
          <h3 class="text-center">Testimonials</h3>
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-5">
              <div class="owl-carousel" data-items="1" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
                <div class="wow-outer">
                  <blockquote class="quote-modern wow slideInLeft"><img src="{{ asset('frontend/images/quote-35x25.png') }}" alt="" width="35" height="25"/>
                    <div class="quote-modern-text">
                      <p>Marketic is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us. I am sure that our company will partner with them again in the future.</p>
                    </div>
                    <div class="quote-modern-meta">
                      <div class="quote-modern-avatar"><img src="{{ asset('frontend/images/testimonials-person-3-96x96.jpg') }}" alt="" width="96" height="96"/>
                      </div>
                      <div class="quote-modern-info">
                        <cite class="quote-modern-cite">Albert Webb</cite>
                        <p class="quote-modern-caption">CEO at Majestic</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="wow-outer">
                  <blockquote class="quote-modern wow slideInLeft"><img src="{{ asset('frontend/images/quote-35x25.png') }}" alt="" width="35" height="25"/>
                    <div class="quote-modern-text">
                      <p>Marketic team provides us with a full service digital marketing service that encompasses social media, demand generation, digital advertising, search engine optimization, email and marketing automation that has increased our visibility and inbound lead generation.</p>
                    </div>
                    <div class="quote-modern-meta">
                      <div class="quote-modern-avatar"><img src="{{ asset('frontend/images/testimonials-person-1-96x96.jpg') }}" alt="" width="96" height="96"/>
                      </div>
                      <div class="quote-modern-info">
                        <cite class="quote-modern-cite">Kelly McMillan</cite>
                        <p class="quote-modern-caption">Private Entrepreneur</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="wow-outer">
                  <blockquote class="quote-modern wow slideInLeft"><img src="{{ asset('frontend/images/quote-35x25.png') }}" alt="" width="35" height="25"/>
                    <div class="quote-modern-text">
                      <p>We rely on Marketic for its digital marketing expertise, particularly in the areas of SEO and social media marketing. Their team is knowledgeable, responsive and committed to supporting our initiatives, making them invaluable partners in our effort to promote our company.</p>
                    </div>
                    <div class="quote-modern-meta">
                      <div class="quote-modern-avatar"><img src="{{ asset('frontend/images/testimonials-person-2-96x96.jpg') }}" alt="" width="96" height="96"/>
                      </div>
                      <div class="quote-modern-info">
                        <cite class="quote-modern-cite">Harold Barnett</cite>
                        <p class="quote-modern-caption">Regional Manager</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer">
              <div class="thumbnail-video-1 bg-gray-700 wow slideInLeft">
                <div class="thumbnail-video-toggle" data-custom-toggle=".video-overlay"></div>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="570" height="320" src="//www.youtube.com/embed/QZzbm-FrkGk" allowfullscreen=""></iframe>
                </div>
                <div class="thumbnail-video__overlay video-overlay bg-cover" style="background-image: url({{ asset('frontend/images/video-preview-1-570x320.jpg') }})">
                  <div class="button-video"></div>
                  <h5>Lawrence Alvarado</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Pricing-->
      @include('frontend.partials.home.pricing')
      <!-- Wide CTA-->
      <section class="section section-md bg-primary-darker text-center novi-bg novi-bg-img" data-preset='{"title":"Wide CTA","category":"cta","id":"wide-cta"}'>
        <div class="container">
          <div class="box-cta-1">
            <h3 class="wow-outer"><span class="wow slideInRight">We Offer Quality <span class="font-weight-bold">Branding and Promotion</span></span></h3>
            <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInLeft" href="#">Free consultation</a></div>
          </div>
        </div>
      </section>
      <!-- Latest Blog Posts-->
      <section class="section section-lg text-center novi-bg novi-bg-img">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInDown">Latest Blog Posts</span></h3>
          <div class="row row-30">
            <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="single-blog-post.html"><img src="{{ asset('frontend/images/grid-blog-1-571x353.jpg') }}" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a href="single-blog-post.html">10 Digital Marketing Mistakes to Avoid</a></h4>
                <ul class="post-modern-meta">
                  <li>by Theresa Barnes</li>
                  <li>
                    <time datetime="2019">Apr 21, 2019 at 12:05 pm</time>
                  </li>
                  <li><a class="button-winona" href="#">News</a></li>
                </ul>
                <p>Though managing your digital marketing campaign may seem easy, you can encounter some complexities, which usually lead to mistakes and a bad promotion effect.</p>
              </article>
            </div>
            <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="single-blog-post.html"><img src="{{ asset('frontend/images/grid-blog-2-571x353.jpg') }}" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a href="single-blog-post.html">Where Marketers Need to Succeed</a></h4>
                <ul class="post-modern-meta">
                  <li>by Theresa Barnes</li>
                  <li>
                    <time datetime="2019">Apr 21, 2019 at 12:05 pm</time>
                  </li>
                  <li><a class="button-winona" href="#">News</a></li>
                </ul>
                <p>Being a successful marketer today might appear to require a never-ending list of skills. Where do you need to excel -- content creation, social media, web analytics, or all of the above?</p>
              </article>
            </div>
          </div>
          <div class="wow-outer button-outer"><a class="button button-primary-outline button-winona wow slideInUp" href="#">View all Blog posts</a></div>
        </div>
      </section>
 
     <!-- Newsletter-->
      <section class="section section-lg bg-gray-100 novi-bg novi-bg-img" data-preset='{"title":"Newsletter Form","category":"contacts","reload":true,"id":"newsletter-form"}'>
          <div class="container">
            <div class="row row-fix justify-content-center">
              <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6">
                <h3 class="wow-outer text-center"><span class="wow slideInUp">Newsletter</span></h3>
                <p class="wow-outer"><span class="wow slideInLeft">Keep up with our always upcoming news and updates. Enter your e-mail and subscribe to our newsletter.</span></p>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform form-inline wow fadeIn" data-wow-delay=".2s" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="subscribe-form-1-email" type="email" name="email" data-constraints="@@Email @@Required">
                    <label class="form-label" for="subscribe-form-1-email">Your e-mail</label>
                  </div>
                  <div class="form-button">
                    <button class="button button-primary button-winona" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </section>
</x-frontend-layout>
    
  