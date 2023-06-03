@extends('master')
@section('content')
  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container ">
        <div class="section-title pt-4 mt-4">
          <h2>Management Consulting Services</h2>
          <p>MgtWell is a management consulting firm, offering a comprehensive range of services to help businesses
            tackle their challenges. Our team of highly skilled professionals brings extensive experience and insight to
            the table, delivering actionable solutions to enterprises and organizations in every sector. We have been
            providing professional consulting services for over a decade, with a large and satisfied client base across
            Afghanistan. . </p>
        </div>
        <div class="row">
          @foreach($manages as $manage)
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"> <img src="{{$manage->image}}" class="col-sm-6"></div>
            <h4 class="title"><a href="">{{ $manage->title }}</a></h4>
            <p class="description">{{$manage->desc }}</p>
            <a href="{{ url('details', ['id'=> $manage->id]) }}" class="btn btn-outline-warning link">Read More</a>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- end of testimonials-->
  </main><!-- End #main -->
 @endsection