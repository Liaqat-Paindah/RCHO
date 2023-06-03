@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="javascript:history.back()">Events</a></li>
        <li><a href="javascript:avoid()">Events Details</a></li>
      </ol>
    </div>

  </div>
</section>
<section id="speakers">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2>Events Details</h2>
            <p>
              MgtWell has extensive experience in Monitoring and Evaluation, boasting a team of well-trained consultants who
              have participated in a broad range of projects and training programs in Afghanistan. We have a proven track
              record of successfully managing projects and delivering high-quality technical assistance and advisory services
              to Afghanistan’s institutional bodies and public administrations. </p>
          </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <img src="../{{$events->photo}}"  class="img-fluid">
              <div class="details">
                <h3> {{$events->title}}</h3>
                <p>{{$events->organization}}</p> <span></span>
                <div class="social">
                    <p>{{$events->start_date}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
@endsection
