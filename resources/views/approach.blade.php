@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
      <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/approach')}}">Approach</a></li>
      </ol>
    </div>

  </div>
</section>
<section id="portfolio-details" class="portfolio-details ">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper align-items-center" id="swiper-wrapper-e1095e36709130c46" aria-live="off" style="transform: translate3d(-1712px, 0px, 0px); transition-duration: 400ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 856px;">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 856px;">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>


                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 856px;">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 856px;">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div></div>
              <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-description">
              <h2>Business Growth </h2>
              <p>
                At MgtWell Consulting Services, we provide hands-on, bespoke Business Growth Consulting solutions to SMEs & start-ups. We help business organizations become well-oiled machinery reflecting confidence and professionalism essential to reaching their goals and vision. We strategically help benchmark businesses for operational and strategic gaps, create robust business management structures & methods and develop functional strategies and plans.
              </p>
            </div>
            <div class="portfolio-description">
              <h2>Coaching & Mentoring</h2>
              <p>
                At MgtWell Consulting Services, We provide mentoring & coaching support to business owners & company key staff to help them navigate business challenges.
        In coaching & mentoring, we help businesses to see their blind spots and hold them responsible for their goals and visions as their accountability partner.
              </p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="section-title">
            <h2>Our Approach </h2>
          <p>
            MgtWell Consulting Services approaches every client’s business as if it were our own. We believe a consulting firm should be more than an advisor. We put ourselves in our clients’ shoes, align our incentives with their objectives, and collaborate to unlock the full potential of their business. This builds deep and enjoyable relationships.
            The right approach is necessary for the right outcome. MgtWell approaches work by applying its external knowledge to your organization’s internal way of doing work. We know that in order to maximize the potential of success for your organization we need to shape our expert advice in a way that applies to your way of doing business. This allows us to create rich relationships with our clients.
          </p>
        </div>
        </div>

      </div>
    </section>
@endsection
