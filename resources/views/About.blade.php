@extends('master')
@section('content')
<!-- 
<section id="about" class="about">
      <div class="container pt-4">
        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>About MgtWell Consulting Services </h3>
              <p>
              MgtWell Consulting Services is an international development management consulting firm that was established in 2013. The firm is registered with the Government of Afghanistan and the United States of America, and has been providing support to the international development and cooperation sector for over a decade.
              </p>
              <div class="row">
                <div class="col-md-6 icon-box">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Our Vision</h4>
                  <p>To be a leading consulting firm in the region, renowned for our exceptional quality services, innovative solutions, and measurable results that contribute to building a better and sustainable world.</p>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="bx bx-receipt"></i>
                  <h4>Our Goal</h4>
                  <p>Our goal is to provide innovative and effective solutions that drive meaningful change and positively impact the lives of those we serve.</p>
                </div>
                <div class="col-md-8 icon-box">
                  <i class="bx bx-shield"></i>
                  <h4>Statement of Belief</h4>
                  <p>We believe that providing superior quality consulting services is the key to achieving sustainable development outcomes. We understand that delivering high-quality services to development implementers can lead to positive impact on the ground and help bridge the gap between implementers and beneficiaries. We are committed to providing professional and technical assistance that allows our clients to achieve their goals, and ultimately make a difference in the lives of those they serve.</p>
                </div>
                <div class="col-md-4 icon-box">
                  <i class="bx bx-images"></i>
                  <h4>Our Mission</h4>
                  <p>To continually strive to be the best and to give our clients quality work that is trustworthy, ethically driven, and empirically proven.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
   
-->
<section id="blog" class="blog">
      <div class="container pt-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row ">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg"  class="img-fluid">
              </div>

              <h2 class="title">About MgtWell Consulting Services </h2>
                <div class="content">
                <p>
                  MgtWell Consulting Services is an international development management consulting firm that was established in 2013. The firm is registered with the Government of Afghanistan and the United States of America, and has been providing support to the international development and cooperation sector for over a decade.
                </p>
                <blockquote>
                  <p>
                    Throughout the years, MgtWell has partnered with various organizations, including government agencies, bilateral and multilateral agencies, foundations, private entities, and INGOs, to clarify, measure , and improve their results.
                  </p>
                </blockquote>

              </div><!-- End post content -->
            </article><!-- End blog post -->
          </div>
          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Service Categories</h3>
                <ul class="mt-3">
                  @foreach($services as $service)
                  <li><a href="#" class="pt-2"><i class="bi bi-chevron-right"></i> {{$service->title}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

            </div><!-- End Blog Sidebar -->

          </div>
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
    <div id="services" class="services pt-2">
      <div class="container">

        <div class="section-title">
          <h2>Our core values</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Integrity</a></h4>
            <p class="description">Integrity is at the forefront of our values. We are dedicated to upholding the highest ethical standards in all of our actions and decisions, and maintaining the trust of our clients and stakeholders.</p>
            <a href="services" class="btn btn-outline-warning link">Read More</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Teamwork</a></h4>
            <p class="description">Teamwork is integral to our operations. We value collaboration and partnership with our clients and colleagues to achieve shared goals and deliver the best results.
            <a href="services" class="btn btn-outline-warning link">Read More</a>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Flexibility</a></h4>
            <p class="description">Flexibility is also crucial to our operations. We are able to adapt to changing circumstances and client needs in order to achieve results that exceed expectations.      </p>
            <a href="services" class="btn btn-outline-warning link">Read More</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-person-lines-fill"></i></div>
            <h4 class="title"><a href="">Commitment</a></h4>
            <p class="description">Commitment to our clients is of the utmost importance to us. We are dedicated to providing professional and quality services that help our clients achieve their goals.</p>
            <a href="services" class="btn btn-outline-warning link">Read More</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-graph-up"></i></div>
            <h4 class="title"><a href="">Quality Services</a></h4>
            <p class="description">Our professionals see what others don't, challenge conventional thinking, and consistently deliver quality services.</p>
            <a href="services" class="btn btn-outline-warning link">Read More</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bar-chart-steps"></i></div>
            <h4 class="title"><a href="">Innovation</a></h4>
            <p class="description">Innovation is a key part of our approach. We are committed to exploring new and creative solutions to improve our services and stay ahead of the curve.            </p>
            <a href="services" class="btn btn-outline-warning link">Read More</a>
          </div>
        </div>

      </div>
    </section>
    @endsection