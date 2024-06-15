@extends('master')
@section('content')
<main id="main">

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to </h2>
                <p class="animate__animated animate__fadeInUp">Afghanistan Research, Development & Health Organization
                </p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">More Details</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">At the heart of our endeavors lies the empowerment of
                  women and girls, </h2>
                <p class="animate__animated animate__fadeInUp">recognizing that true alleviation of poverty necessitates
                  the attainment of equal rights and opportunities for all individuals.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">More Details</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam
                  voluptatem</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">More Details</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>


    
  </section><!-- End Hero Section -->
  
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Reccent <span class="highlight">Publications</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="assets/img/team/1.png" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>ARDHO Announcement</h4>
              <p>Kabul Office</p>
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="assets/img/team/2.jpg" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Doctor Nasratullah Safari </h4>
              <p>General Director - Message</p>
            </div>
          </div>
        </div>
        <!-- End column -->


       
        @foreach($reports as $report)
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{$report->profile}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-share"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-info"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{$report->pdf}}">
                      <i class="bi bi-download"> </i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>{{$report->report_title}} - {{$report->submitted}}</h4>
              <p>Education Project</p>
            </div>
          </div>
        </div>
        @endforeach



        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="assets/img/team/4.jpg" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-info"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-share"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Transforming Healthcare </h4>
              <p>Research and Innovation</p>
            </div>
          </div>
        </div>
        <!-- End column -->
      </div>
    </div>
  </div><!-- End Team Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Partners</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-person"></i>
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Staff</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  <section id="gallery" class="gallery">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row px-4">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <div class="section-title">
              <h2>Our <span class="highlight"> Partners</span> </h2>
              <p>Afghanistan Research Development and Health organization (ARDHO) is a non-governmental, non-profit and
                humanitarian organization registered with the Ministry of Economy of Afghanistan, established in 2019 by
                a group of young, energetic, motivated, and highly committed youth to address the most urgent and
                pressing needs of the people of Afghanistan to improve and develop the socio-economic status of the
                underprivileged and disadvantaged rural communities in Afghanistan. .</p>
            </div>
          </div>
        </div>
      </div>


      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-1.jpg"><img
                src="assets/img/clients/client-1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-2.jpg"><img
                src="assets/img/clients/client-2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-3.jpg"><img
                src="assets/img/clients/client-3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-4.jpg"><img
                src="assets/img/clients/client-4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-5.jpg"><img
                src="assets/img/clients/client-5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-6.jpg"><img
                src="assets/img/clients/client-6.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
    
    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="assets/img/about/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>Five Years of Health Impact</h2>
            <p class="text-stories">We are pleased to share this booklet that summarizes 10 of the best stories we’ve collected from the field. These narratives are a legacy to Madagascar’s health system and for future public health interventions in the country. They show how UNICEF transforms lives by working hand in hand with the Ministry of Public Health to strengthen community resilience and to enhance the quality of primary health care services in rural communities.</p>
            <a href="#contact" class="ready-btn scrollto">Read Stories</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->
  </section><!-- End Gallery Section -->
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">

<div class="container" data-aos="zoom-out">

  <div class="row g-5">

    <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
      <h3>Dr. Nasratullah "Safari"</h3>
      <p>             Afghanistan Research Development and Health organization (ARDHO) is a non-governmental, non-profit and
        humanitarian organization registered with the Ministry of Economy of Afghanistan, established in 2019 by
        a group of young, energetic, motivated, and highly committed youth to address the most urgent and
        pressing needs of the people of Afghanistan to improve and develop the socio-economic status of the
        underprivileged and disadvantaged rural communities in Afghanistan.</p>
      <a class="cta-btn align-self-start" href="#">More Details</a>
    </div>

    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
      <div class="img">
        <img src="assets/img/cta.jpg" alt="" class="img-fluid">
      </div>
    </div>

  </div>

</div>

</section><!-- /Call To Action Section -->


</main><!-- End #main -->
@endsection