@extends('master')
@section('content')
<section id="team" class="team ">
    <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <ol>
            <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/team')}}">Team</a></li>
            </ol>
          </div>
  
        </div>
      </section>
          <!-- start of testimonials-->
    <section id="testimonials" class="testimonials">
      <div class="container aos-init aos-animate" data-aos="zoom-in">
        <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper" id="swiper-wrapper-b1c62a7e4987c10a3" aria-live="off" style="transform: translate3d(-12960px, 0px, 0px); transition-duration: 0ms;">
            @foreach($messages as $message)
          <!-- start of testimonial item -->
            <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 5">
              <div class="testimonial-item">
                <img src="{{$message->profile}}" class="testimonial-img" alt="">
                <h3>{{$message->name}}</h3>
                <h4>{{$message->position}}</h4>
                <p>
                  {{$message->desc}}
                </p>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

            @foreach($messages as $message)
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 5">
              <div class="testimonial-item">
                <img src="{{$message->profile}}" class="testimonial-img" alt="">
                <h3>{{$message->name}}</h3>
                <h4>{{$message->position}}</h4>
                <p>
                  {{$message->desc}}
                </p>
              </div>
            </div>
            @endforeach

          </div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>
    </section>
    <!-- end of testimonials-->
      <div class="container mt-4">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>MgtWell Consulting Services prides itself on its exceptional team, which consists of more than 150 highly skilled professionals. This diverse group is comprised of project managers, business experts, mentors' trainers, researchers, data analysts, and specialists in monitoring and evaluation, as well as business management. Each member of our team brings a wealth of experience and expertise to the table. 
Our project managers possess a deep understanding of effective strategies and methodologies, ensuring that every project is executed with precision and efficiency. Our business experts have a keen eye for identifying opportunities and implementing innovative solutions that drive growth and success for our clients. The mentors' trainers on our team are dedicated to nurturing talent and empowering individuals to reach their full potential.
Furthermore, our researchers are skilled at conducting thorough and insightful studies, providing valuable insights that inform decision-making processes. The data analysts we have onboard possess exceptional analytical skills, enabling them to extract meaningful information from complex datasets. Our experts in monitoring and evaluation ensure that our clients' projects are constantly assessed and optimized for maximum impact.
With years of experience in their respective fields, our team members are well-equipped to deliver high-quality services and unwavering support to our clients.
Our professional team values the diverse needs of our clients and struggles to offer solutions and results that are personalized to the smallest detail and aligned with the highest quality standards.
</p>
        </div>
        <br><br>

        <div class="row">
            @foreach($teams as $team)
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="member">
              <img src="{{$team->profile}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{$team->name}}</h4>
                  <span>{{$team->position}}</span>
                  <div class="social">
                  </div>
                </div>
              </div>
            </div>
            <div class="member-desc">
                <h4>{{$team->name}}</h4>
                <p class="desc-position">{{$team->position}}</p>
                <p class="desc-field">{{$team->study_field}}</p>
                <a href="{{url('team_profile',  ['id'=> $team->id])}}" class="btn btn-outline-warning btn-block">View Profile</a>
            </div>
          </div>
          @endforeach
          <div class="mt-4">
            
          </div>
          @foreach($staffs as $staff)
          <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
            <div class="member">
              <img src="{{$staff->profile}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{$staff->name}}</h4>
                  <span>{{$staff->position}}</span>
                  <div class="social">
                  </div>
                </div>
              </div>
            </div>
            <div class="member-desc">
                <h5>{{$staff->name}}</h5>
                <p class="desc-field">{{$staff->position}}</p>
                <p class="desc-field"> {{$staff->study_field}}</p>

                <a href="{{url('team_profile',  ['id'=> $staff->id])}}" class="btn btn-outline-warning btn-block">View Profile</a>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>

@endsection