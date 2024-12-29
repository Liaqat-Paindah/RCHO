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
                <p class="animate__animated animate__fadeInUp">Reaching Community & Healthcare Organization
                </p>
                <a href="{{ url('/about') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">More Details</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We aims to improve </h2>
                <p class="animate__animated animate__fadeInUp">RCHO aims to improve the living standards of vulnerable communities in Afghanistan by focusing on community mobilization, capacity building, advocacy, and strengthening grassroots institutions.</p>
                <a href="{{ url('/about') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">More Details</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">RCHO promotes</h2>
                <p class="animate__animated animate__fadeInUp"> youth leadership, human rights, and better child health, while improving healthcare access for underserved communities.</p>
                <a href="{{ url('/about') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">More Details</a>
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


<section id="hero" class="hero section">
    <div class="featured container" style="margin-top: 320px ;">

        <div class="row gy-2">

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-eye icon"></i></div>
              <h4><a href="" class="stretched-link">Vision</a></h4>
              <p id="desc">An enabling environment for the
                realization, respect, and protection of
                fundamental human rights among youth
                and develop their leadership qualities to
                make them active contributors within the
                society plus make greater understanding
                of health and illness in children and
                substantial improvements in health quality
                for those who have no access to health
                care facilities.</p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="featured-item position-relative">
              <div class="icon"> <i class="bi bi-clipboard-data icon"></i> </div>
              <h4><a href="" class="stretched-link">Goal</a></h4>
              <p id="desc">The goal of RCHO is to contribute
                in improving the living standard
                of the vulnerable communities of
                Afghanistan through community
                mobilization, capacity building,
                advocacy & strengthening of
                institutions at the grass root level.</p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-gear-wide-connected icon"></i></div>
              <h4><a href="" class="stretched-link">Strategy</a></h4>
              <p id="desc" >A sustainable strategy is devised to
                achieve the maximum, a need based and
                right based approach initiated ascertains
                the problem with fully community
                involvement and mobilizing all indigenous
                and local resources. The program goal are
                materialized with a helping hand from
                member’s donor agencies, Philanthropists.</p>
            </div>
          </div><!-- End Featured Item -->

        </div>

      </div>
</section>


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p> 10 Happy Partners</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p> 20 Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-person"></i>
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p> 100 Staff</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p> 15 Awards</p>
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
              <p>Reaching Community & Healthcare
                    Organization (RCHO) is an independent
                    registered non-government and
                    nonprofit civil society organization
                    based at Kabul Province. RCHO prime
                    motto is community Development and
                    health services delivery to the deprived
                    and marginalized people of the society
                    across the country.
                    In 2022 a group of educated, dynamic
                    and like-minded youth working in the
                    development sector, got together to
                    establish an organization, for addressing
                    the most urgent and pressing needs of
                    the people of Afghanistan. True to this
                    spirit, the organization was named
                    Reaching Community & Healthcare
                    Organization (RCHO).
                    Considering their association with the
                    development sector the group was
                    cognizant of the plethora of problems
                    plaguing the province.</p>
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
                <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-1.jpg"><img
                src="assets/img/clients/client-1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-2.jpg"><img
                src="assets/img/clients/client-2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-3.jpg"><img
                src="assets/img/clients/client-3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/clients/client-4.jpg"><img
                src="assets/img/clients/client-4.jpg" class="img-fluid" alt=""></a></div>


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
            <h2>Overall Objective</h2>
            <p class="text-stories">
                The overall development objective of (RCHO) is enhanced ability in the target
                communities to tackle their own economic, social and environmental problems for
                sustainable community development..</p>
            <a href="#contact" class="ready-btn scrollto">Read Stories</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->
  </section><!-- End Gallery Section -->
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">


</section><!-- /Call To Action Section -->


</main><!-- End #main -->
@endsection
