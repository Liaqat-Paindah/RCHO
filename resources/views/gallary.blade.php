@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="index">Home</a></li>
        <li><a href="gallary">Gallary</a></li>
      </ol>
    </div>

  </div>
</section>
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Gallary</h2>
      <p>


        MgtWell has extensive experience in Monitoring and Evaluation, boasting a team of well-trained consultants who
        have participated in a broad range of projects and training programs in Afghanistan. We have a proven track
        record of successfully managing projects and delivering high-quality technical assistance and advisory services
        to Afghanistan’s institutional bodies and public administrations. </p>
    </div>



    <div class="row portfolio-container" style="position: relative; height: 1026px;">
      @if(count($Images) > 0)
      @foreach($Images as $Image)
      <div class="col-lg-4 col-md-6 portfolio-item all" style="position: absolute; left: 0px; top: 0px;">
        <div class="portfolio-wrap">
          <img src="{{ $Image->image}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $Image->name }}</h4>
            <p>{{ $Image->fields }}</p>
            <div class="portfolio-links">
              <a href="{{ $Image->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox"
                title="{{$Image->name}}"><i class="bx bx-plus"></i></a>
              <a href="projects" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <tr>
        <td colspan="10">There are no data.</td>
      </tr>
      @endif
      <!--
           @if(count($Images02) > 0)
          @foreach($Images02 as $Image02)
          <div class="col-lg-4 col-md-6 portfolio-item filter-project" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="{{ $Image02->image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $Image02->name }}</h4>
                <p>{{ $Image02->fields }}</p>
                <div class="portfolio-links">
                  <a href="{{ $Image02->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="projects" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <tr>
            <td colspan="10">There are no data.</td>
        </tr>
          @endif
          @if(count($events) > 0)
          @foreach($events as $event)
          <div class="col-lg-4 col-md-6 portfolio-item filter-event" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="{{ $event->image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $event->name }}</h4>
                <p>{{ $event->fields }}</p>
                <div class="portfolio-links">
                  <a href="{{ $event->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" $event->name }}"><i class="bx bx-plus"></i></a>
                  <a href="projects" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <tr>
            <td colspan="10">There are no data.</td>
        </tr>
          @endif

          @foreach($trainings as $training)
          <div class="col-lg-4 col-md-6 portfolio-item filter-training" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="{{ $training->image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $training->name }}</h4>
                <p>{{ $training->fields }}</p>
                <div class="portfolio-links">
                  <a href="{{ $training->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" $training->name }}"><i class="bx bx-plus"></i></a>
                  <a href="projects" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($employees as $employee)
          <div class="col-lg-4 col-md-6 portfolio-item filter-employee" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="{{ $employee->image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $employee->name }}</h4>
                <p>{{ $employee->fields }}</p>
                <div class="portfolio-links">
                  <a href="{{ $employee->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" $employee->name }}"><i class="bx bx-plus"></i></a>
                  <a href="projects" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach 
                  -->
    </div>
    <div class="text-center">
      {{ $Images->links('My-Paginate') }}
    </div>
  </div>
</section>
@endsection