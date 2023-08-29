@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
      <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/services')}}">Services</a></li>
              <li><a href="{{url('/monitoring')}}">Monitoring</a></li>

      </ol>
    </div>

  </div>
</section>
  <main id="main">
    <!-- ======= Services Section ======= -->
    <div id="service" class="service courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Monitoring & Evaluation Services</h2>
          <p>MgtWell has extensive experience in Monitoring and Evaluation, boasting a team of well-trained consultants
            who have participated in a broad range of projects and training programs in Afghanistan. We have a proven
            track record of successfully managing projects and delivering high-quality technical assistance and advisory
            services to Afghanistan’s institutional bodies and public administrations. </p>
        </div>

        <div class="row">
          @foreach($services as $data)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"> <img src="{{$data->image}}" class="col-sm-6 servic-icons"></div>
              <h4 class="services-title"><a href="">{{ $data->title }}</a></h4>
              <p>{{$data->desc }}</p>
            </div>
          </div>
          @endforeach
        </div>
      <br><br>
    </div>
    </div>

    <!-- end of testimonials-->
  </main><!-- End #main -->
 @endsection