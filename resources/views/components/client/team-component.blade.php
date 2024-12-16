<style>
    .team .team-member .member-img:after {
  position: absolute;
  content: "";
  left: -1px;
  right: -1px;
  bottom: -1px;
  height: 100%;
  background-color: var(--surface-color);
  -webkit-mask: url({{ asset('build/assets/img/team-shape.svg') }}) no-repeat center bottom;
  mask: url({{ asset('build/assets/img/team-shape.svg') }}) no-repeat center bottom;
  -webkit-mask-size: contain;
  mask-size: contain;
  z-index: 1;
}
.team .team-member {
  box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  text-align: center;
  border-radius: 5px;
  transition: 0.3s;
}

.team .team-member .member-img {
  /* position: relative;
  overflow: hidden; */
  height: 300px;
    width: 100%;
}
.member-info p{
    margin:0px;
    padding:0px;
}

@media (max-width: 1200px) {
  .team .team-member {
    margin-bottom: 30px;
  }
  .team .team-member .member-img {
    height: 200px;
  }
}
@media (max-width: 992px) {
  .team .team-member .member-img {
    height: 250px;
  }
}
@media (max-width: 768px) {
  .team .team-member .member-img {
    height: 350px;
  }
}

</style>
<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->

      <!-- Team Section -->
      <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            @foreach($teams as $team)
            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="team-member">
                <div class="member-img">
                  <img
                    src="{{ asset('storage/'. $team->image) }}" height="500px;" width="100%"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href="{{ $team->twitter }} " target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ $team->facebook }} " target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $team->instagram }} " target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $team->linkedin }} " target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>

                </div>
                <div class="member-info">
                  <h4>{{ $team->name }}</h4>
                  <span>{{ $team->position }}</span>
                  <p>{!!$team->content!!}
                  </p>
                </div>
              </div>
            </div>
            <!-- End Team Member -->
            @endforeach
          </div>
        </div>
      </section>
      <!-- /Team Section -->

</div>
