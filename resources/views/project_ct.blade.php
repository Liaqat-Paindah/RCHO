@extends('master')
@section('content')
<main id="main">

<br><br><br><br> <br>
    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-headline">
        <div class="text-center">
          <h2 >Our Completed <span class="highlight">Projects</span></h2>
        </div>
        <p>ARDHO has five years’ experience in implementing projects related to CARE Afghanistan's thematic areas, such as education, health, Nutrition, gender equality, Women Economic Empowerment, Emergency response, and water, sanitation, and hygiene (WASH), Food Security & livelihoods. Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos-delay="100">

        <div class="row gy-5">
          @foreach($projects as $project)
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{$project->image}}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-heart-pulse "></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>{{$project->project_name}}</h3>
                </a>
                <p>{{$project->description}}</p>
              </div>
            </div>
          </div><!-- End Service Item -->
          @endforeach
        </div>

      </div>

    </section><!-- /Services Section -->



</main><!-- End #main -->
@endsection