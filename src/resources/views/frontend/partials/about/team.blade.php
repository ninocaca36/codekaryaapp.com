<section class="section section-lg section-last text-center">
  <div class="container">
    <h3>Who We Are</h3>
    <div class="row row-50">
      @foreach($teams as $team)
      <div class="col-sm-6 col-lg-4">
        <article class="profile-minimal">
          <img class="profile-minimal-image" src="{{ (isset($team->image) && str_starts_with($team->image, 'team/')) ? asset('storage/' . $team->image) : asset('frontend/images/' . ($team->image ?? 'team-1-370x368.jpg')) }}" alt="{{ $team->name }}" width="370" height="368"/>
          <div class="profile-minimal-caption">
            <h4 class="profile-minimal-title">{{ $team->name }}</h4>
            <p class="profile-minimal-position">{{ $team->role }}</p>
          </div>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>
