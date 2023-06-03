@extends('master')
@section('content')
  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container ">

        <div class="section-title pt-4 mt-4">
          <h2>Monitoring & Evaluation Services</h2>
          <p>MgtWell has extensive experience in Monitoring and Evaluation, boasting a team of well-trained consultants
            who have participated in a broad range of projects and training programs in Afghanistan. We have a proven
            track record of successfully managing projects and delivering high-quality technical assistance and advisory
            services to Afghanistan’s institutional bodies and public administrations. </p>
        </div>
        <div class="row">
          @foreach($services as $data)
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"> <img src="{{$data->image}}" class="col-sm-6"></div>
            <h4 class="title"><a href="">{{ $data->title }}</a></h4>
            <p class="description">{{$data->desc }}</p>
            <a href="{{ url('details', ['id'=> $data->id]) }}" class="btn btn-outline-warning link">Read More</a>
          </div>
          @endforeach
        </div>


      </div>
    </section><!-- End Services Section -->

    <!-- end of testimonials-->
  </main><!-- End #main -->
 @endsection