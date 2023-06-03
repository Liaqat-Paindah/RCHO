@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/services') }}">Services</a></li>
        <li><a href="#">Service Details</a></li>
      </ol>
    </div>

  </div>
</section>
<section id="portfolio-details" class="portfolio-details ">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper align-items-center" id="swiper-wrapper-e1095e36709130c46" aria-live="off" style="transform: translate3d(-1712px, 0px, 0px); transition-duration: 400ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 856px;">
                  <img src="{{ url('assets/img/Projects/banner-3.jpg') }}" alt="">
                </div>

                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 856px;">
                  <img src="{{ url('assets/img/Projects/banner-1.jpg') }}" alt="">
                </div>

                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 856px;">
                  <img src="{{ url('assets/img/Projects/banner-2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 856px;">
                  <img src="{{ url('assets/img/Projects/banner-3.jpg') }}" alt="">
                </div>

              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 856px;">
                  <img src="{{ url('assets/img/Projects/banner-1.jpg') }}" alt="">
                </div></div>
              <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>

          <div class="col-lg-4">

              <div class="sidebar">
                <div class="sidebar-item search-form">
                  <h3 class="sidebar-title">Search</h3>
                  <form action="" class="mt-3">
                    <input type="text">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div>
              <!-- End sidebar search formn-->
                <div class="sidebar-item categories">
                  <h3 class="sidebar-title">Service Categories</h3>
                  <ul class="mt-3">
                    <li><a href="{ url('projects')}}" class="pt-2"><i class="bi bi-chevron-right"></i> Monitoring & Evaluation Services   </a></li>
                    <li><a href="{{ url('projects')}}" class="pt-2"><i class="bi bi-chevron-right"></i> Management Consulting Services </a></li>
                  </ul>
                </div><!-- End sidebar categories-->
  
              </div><!-- End Blog Sidebar -->
              <div class="portfolio-description">
                <h2>{{$services->title }} </h2>
                <p>
                  {{$services->desc}}
                </p>
              </div>
        </div>
      </div>
    </section>
@endsection
