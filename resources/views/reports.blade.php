@extends('master')
@section('content')
<main id="main">
<br><br>
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-12">
          <h1>Our Reports</h1>
           <p>ARDHO has five years’ experience in implementing projects related to CARE Afghanistan's thematic areas, such as education, health, Nutrition, gender equality, Women Economic Empowerment, Emergency response, and water, sanitation, and hygiene (WASH), Food Security & livelihoods. Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.</p>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Page Title -->
<br><br>
<!-- Courses Section -->
<section id="courses" class="courses section">

  <div class="container">

    <div class="row">
      @foreach($reports as $report)
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="course-item">
          <img src="{{$report->profile}}" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Submitted: {{$report->submitted }}</p>
              <p class="price">{{$report->date_published }}</p>
            </div>

            <h3><a href="course-details.html">{{$report->report_title}}</a></h3>
            <p class="description"> {{$report->description}}  </p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <a href="{{$report->pdf}} " _blank class="bi bi-download"> Download</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <a href="" class="bi bi-share"> Share</a>

              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->
      @endforeach
    </div>

  </div>

</section><!-- /Courses Section -->

</main>



</main><!-- End #main -->
@endsection