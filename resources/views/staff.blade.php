@extends('master')
@section('content')
<main id="main">

<br><br><br> <br><br> <br><br>
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">
      <div class="section-title">
              <h2>Our <span class="highlight"> Key Staff</span> </h2>
              <p>ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.</p>
            </div>
        <div class="row">
          @foreach($staff as $user)
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{$user->profile}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$user->name}}</h4>
                <span>{{$user->position}}</span>
                <p>{{$user->degree}}</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </section><!-- End Doctors Section -->



</main><!-- End #main -->
@endsection