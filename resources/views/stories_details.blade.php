@extends('master')
@section('content')
<main id="main">
      <!-- ======= Breadcrumbs Section ======= -->
      <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Stories</h2>
            <ol>
              <li><a href="{{ url('/stories')}}">Stories</a></li>
              <li>Stories Details</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs Section -->
  <!-- Skills Section -->
  <section id="skills" class="skills section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row">

        <div class="col-lg-6 d-flex align-items-center">
          <img src="..\{{$stories->image}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0 content">

          <h3>{{$stories->story_title}}</h3>
          <p class="highlight-p">{{$stories->description}} <br> {{$stories->description}} {{$stories->description}}</p>
          <div class="text-start ">
            <span class="text-truncate me-3"><i class="fa fa-clock text-success me-2"></i>Published: {{$stories->date_published}}</span>
            <span class="text-truncate me-3"><i class="far fa-user text-success me-2"></i>Author: {{$stories->author}}</span>
        </div>


        </div>
      </div>

    </div>

  </section><!-- /Skills Section -->


</main><!-- End #main -->
@endsection