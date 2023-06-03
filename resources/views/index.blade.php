@extends('master')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" >
            <video controlsList="nodownload" controls autoplay muted loop playsinline >
              <source src="assets/video/slide.mp4" type="video/mp4">
            </video>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">MgtWell Consulting Services </h2>
                <p class="animate__animated animate__fadeInUp">Quality is the Priority of what we do in our services
                  through the process.
                </p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <video controlsList="nodownload" controls autoplay muted loop playsinline >
              <source src="assets/video/slide1.mp4" type="video/mp4">
            </video>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Delivering Results that Endure</h2>
                <p class="animate__animated animate__fadeInUp">Delivering top-level service is our specialty, and we
                  thrive in a diverse and fast-paced environment.</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" >
            <video controlsList="nodownload" controls autoplay muted loop playsinline >
              <source src="assets/video/slide2.mp4" type="video/mp4">
            </video>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInUp">Expertise and Experience</h2>
                <p class="animate__animated animate__fadeInUp">We have a dedicated team of senior-level consultants and
                  have access to a pool of subject matter experts to ensure that we provide the most appropriate and
                  relevant services to meet our clients’ needs. This approach allows us to be flexible and efficient in
                  providing the necessary services in a timely.</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
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
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Why Us Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>WHY US?</h2>
          <p>MgtWell has a proven track record of delivering management consulting and M&E solutions to the international development sector since early 2013. Our company has established itself as a market leader in our field. Some of the key elements that distinguish us from our competitors include.         </p>
        </div>

        <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>MgtWell Consulting Services</h4>
                  <p class="price">01</p>
                </div>

                <h3><a href="#">All-In-One M&E Programs</a></h3>
                <p class="text1">Our expertise is in enhancing the international development sector by providing reliable and precise data for development projects, enabling timely identification of successes and challenges, and enabling corrective actions to be taken. We are specialist consultants, focusing our proficiency on providing exceptional service to a specific clientele.<a href="about">Read More</a>  </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid col-sm-12" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>MgtWell Consulting Services</h4>
                  <p class="price">02</p>
                </div>

                <h3><a href="#">Expertise and Experience</a></h3>
                <p class="text2">We have a dedicated team of senior-level consultants and have access to a pool of subject matter experts to ensure that we provide the most appropriate and relevant services to meet our clients’ needs. This approach allows us to be flexible and efficient in providing the necessary services in a timely. <a href="about">Read More</a> </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>MgtWell Consulting Services</h4>
                  <p class="price">03</p>
                </div>

                <h3><a href="#">Proven Track Record</a></h3>
                <p class="text3"></p> 
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
      
    <div id="counts" class="counts">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-trophy"></i>
              <span data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="0" class="purecounter">19</span>
              <p>Awards Wining</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-check-circle"></i>
              <span data-purecounter-start="0" data-purecounter-end="78" data-purecounter-duration="0" class="purecounter">78</span>
              <p>Projects Completed</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-briefcase"></i>
              <span data-purecounter-start="0" data-purecounter-end="1354" data-purecounter-duration="0" class="purecounter">1354</span>
              <p>Job Created</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="280" data-purecounter-duration="0" class="purecounter">280</span>
              <p>Satisfied Clients</p>
            </div>
          </div>

        </div>
      </div>
    </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
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
            <a href="" class="btn btn-outline-warning link">Read More</a>
          </div>
          @endforeach
        </div>

        <div class="section-title">
          <h2>Management Consulting Services</h2>
          <p>MgtWell is a management consulting firm, offering a comprehensive range of services to help businesses
            tackle their challenges. Our team of highly skilled professionals brings extensive experience and insight to
            the table, delivering actionable solutions to enterprises and organizations in every sector. We have been
            providing professional consulting services for over a decade, with a large and satisfied client base across
            Afghanistan. . </p>
        </div>
        <div class="row">
          @foreach($manages as $manage)
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"> <img src="{{$manage->image}}" class="col-sm-6"></div>
            <h4 class="title"><a href="">{{ $manage->title }}</a></h4>
            <p class="description">{{$manage->desc }}</p>
            <a href="" class="btn btn-outline-warning link">Read More</a>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->
    <section id="speakers">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2>Events</h2>
            <p>
              MgtWell has extensive experience in Monitoring and Evaluation, boasting a team of well-trained consultants who
              have participated in a broad range of projects and training programs in Afghanistan. We have a proven track
              record of successfully managing projects and delivering high-quality technical assistance and advisory services
              to Afghanistan’s institutional bodies and public administrations. </p>
          </div>
        <div class="row">
          @foreach($events as $event)
          <div class="col-lg-4 col-md-6">
          <a href="{{url('event_details',  ['id'=> $event->id])}}">
            <div class="speaker aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <img src="{{$event->photo}}" class="img-fluid">
              <div class="details">
                <h3> {{$event->title}}</h3>
                <p>{{$event->organization}}</p> <span></span>
                <div class="social">
                    <p>{{$event->start_date}}</p>
                </div>
              </div>
            </div>
          </a>
          </div>
          @endforeach


        </div>
      </div>
    </section>



    <section id="gallery" class="gallery">
      <div class="container-lg aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Clients</h2>
          <p>For the past decade, MgtWell has had the privilege of collaborating with an impressive array of clients and partners in the country. We are proud to be able to provide a wide selection of state-of-the-art solutions and skilled direction in our various practice and sector areas. Among our esteemed clients and partners are government organizations, bilateral and multilateral agencies, foundations, private businesses, civil society organizations, and INGOs. Our most prominent clients and partners include.</p>
        </div>

        <div class="gallery-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
          <div class="swiper-wrapper align-items-center" id="swiper-wrapper-dbca29f3aa213b10c" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1842.4px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-4.jpg"><img src="assets/img/gallary/gallery-4.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-5.jpg"><img src="assets/img/gallary/gallery-5.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-6.jpg"><img src="assets/img/gallary/gallery-6.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-7.jpg"><img src="assets/img/gallary/gallery-7.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-8.jpg"><img src="assets/img/gallary/gallery-8.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-1.jpg"><img src="assets/img/gallary/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-2.jpg"><img src="assets/img/gallary/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-3.jpg"><img src="assets/img/gallary/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-4.jpg"><img src="assets/img/gallary/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-5.jpg"><img src="assets/img/gallary/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-6.jpg"><img src="assets/img/gallary/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-7.jpg"><img src="assets/img/gallary/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-8.jpg"><img src="assets/img/gallary/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-1.jpg"><img src="assets/img/gallary/gallery-1.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-2.jpg"><img src="assets/img/gallary/gallery-2.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-3.jpg"><img src="assets/img/gallary/gallery-3.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-4.jpg"><img src="assets/img/gallary/gallery-4.jpg" class="img-fluid" alt=""></a></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 243.2px; margin-right: 20px;"><a class="gallery-lightbox" href="assets/img/gallary/gallery-5.jpg"><img src="assets/img/gallary/gallery-5.jpg" class="img-fluid" alt=""></a></div></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 5" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>
    </section>

  </main><!-- End #main -->
 @endsection