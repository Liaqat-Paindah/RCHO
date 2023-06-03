@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/events')}}">Events and News</a></li>
      </ol>
    </div>

  </div>
</section>
<section id="speakers">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2>Events</h2>
            <p>
              MgtWell has extensive experience in Monitoring and Evaluation, boasting a team of well-trained consultants who
              have participated in a broad range of projects and training programs in Afghanistan. We have a proven track
              record of successfully managing projects and delivering high-quality technical assistance and advisory services
              to Afghanistan’s institutional bodies and public administrations. </p>
          </div>
        <div class="row">
          @foreach($events as $event)
          <div class="col-lg-4 col-md-6">
          <a href="{{url('event_details',  ['id'=> $event->id])}}">
            <div class="speaker aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <img src="{{$event->photo}}" class="img-fluid">
              <div class="details">
                <h3> {{$event->title}}</h3>
                <p>{{$event->organization}}</p> <span></span>
                <div class="social">
                    <p>{{$event->start_date}}</p>
                </div>
              </div>
            </div>
          </a>
          </div>
          @endforeach


        </div>
      </div>

    </section>
    <section id="gallery">

<div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-title">
        <h2>Events Gallery</h2>
      </div>
</div>

<div class="gallery-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
  <div class="swiper-wrapper align-items-center" id="swiper-wrapper-c2bd50580b1191ca" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-3610px, 0px, 0px);">
    @foreach($slides as $slide)
  <div class="swiper-slide swiper-slide" data-swiper-slide-index="1" role="group" aria-label="" style="width: 341px; margin-right: 20px;"><a href="{{$slide->image}}" class="gallery-lightbox"><img src="{{$slide->image}}" class="img-fluid" alt=""></a></div>
  @endforeach
</div>
  <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 8" aria-current="true"></span></div>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

</section>
@endsection
