@extends('master')
@section('content')


    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Recent News</h2>
          <p>Welcome to the RCHO News page, where you can find the most recent developments, announcements, and updates from our community. Stay informed about upcoming events, housing initiatives, policy changes, and more.</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-5">
            @foreach($news as $new)
            <div class="col-xl-4 col-md-6">
              <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                <div class="post-img position-relative overflow-hidden">
                  <img src="{{$new->image}}" class="img-fluid" alt="">
                  <span class="post-date">{{$new->date}}</span>
                </div>

                <div class="post-content d-flex flex-column">

                  <h3 class="post-title">{{$new->title}}</h3>

                  <div class="meta d-flex align-items-center">
                        <div class="text-justify">
                            <p class="text-desc">{{$new->desc}}</p>
                        </div>
                  </div>

                  <hr>

                  <a href="{{ url('/news')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                </div>

              </div>
            </div><!-- End post item -->
            @endforeach

          </div>

        </div>

      </section><!-- /Recent Posts Section -->
@endsection
