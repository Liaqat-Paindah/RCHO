@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
      <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/services')}}">Services</a></li>
              <li><a href="{{url('/management')}}">Management</a></li>

      </ol>
    </div>

  </div>
</section>
  <main id="main">
    <!-- ======= Services Section ======= -->
    <div id="service" class="service courses">
      <div class="container" data-aos="fade-up">
        <div class="section-title mt-4">
          <h2>Management Consulting Services</h2>
          <p>MgtWell is a management consulting firm, offering a comprehensive range of services to help businesses
            tackle their challenges. Our team of highly skilled professionals brings extensive experience and insight to
            the table, delivering actionable solutions to enterprises and organizations in every sector. We have been
            providing professional consulting services for over a decade, with a large and satisfied client base across
            Afghanistan. </p>

        <div class="row">
          @foreach($manages as $manage)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"> <img src="{{$manage->image}}" class="col-sm-6 servic-icons"></div>
              <h4 class="services-title"><a href="">{{ $manage->title }}</a></h4>
              <p>{{$manage->desc }}</p>
            </div>
          </div>
          @endforeach
        </div>
        <br><br>
      </div>
    </div>
    </div>

    <!-- end of testimonials-->
  </main><!-- End #main -->
 @endsection