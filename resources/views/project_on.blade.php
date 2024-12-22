@extends('master')
@section('content')
<main id="main">


    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">
             <!-- Section Title -->
             <div class="section-title">
                <h2>Project in Progress</h2>
                <p class="text-justify">RCHO has four years’ experience in implementing projects related to Afghanistan's thematic areas, such as education, health, Nutrition, gender equality, Women Economic Empowerment, Emergency response, and water, sanitation, and hygiene (WASH), Food Security & livelihoods. Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.</p>
              </div>
              <div class="row">
                @foreach($projects as $project)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card" style='background-image: url("{{$project->image}}");' data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                      <h5 class="card-title"><a href="">{{$project->project_name}}</a></h5>
                      <p class="card-text">{{$project->description}}</p>
                      <div class="read-more"><a href="{{url('/project_details')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                    </div>
                  </div>
                </div>
                @endforeach
           </div>
      </div>
    </section><!-- End More Services Section -->


</main><!-- End #main -->
@endsection
