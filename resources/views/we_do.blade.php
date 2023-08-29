@extends('master')
@section('content')
<br><br> <br>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/we_do')}}">What We Do</a></li>
      </ol>
    </div>
  </div>
</section>
<section id="portfolio-details" class="portfolio-details ">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div
          class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
          <div class="swiper-wrapper align-items-center" id="swiper-wrapper-e1095e36709130c46" aria-live="off"
            style="transform: translate3d(-1712px, 0px, 0px); transition-duration: 400ms;">
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2"
              role="group" aria-label="3 / 3" style="width: 856px;">
              <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
            </div>

            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3"
              style="width: 856px;">
              <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
            </div>


            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3"
              style="width: 856px;">
              <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
            </div>

            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0"
              role="group" aria-label="1 / 3" style="width: 856px;">
              <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
            </div>
          </div>
          <div
            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span
              class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
              aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
              role="button" aria-label="Go to slide 3"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-description">
          <h2>What We Do</h2>
          <p>
            Our clients trust us to effectively design, implement, evaluate, and disseminate the results of our research and evaluations to key stakeholders. We strive to empower our clients to learn from their project achievements and increase their future impact while fulfilling their accountability requirements. MgtWell is capable of handling long-term projects and ensuring that we achieve the desired results within the allotted time frame. We always have a timeline and a strategic plan in place to ensure that all objectives are met in the assignment
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section-title">
        <h2>What We Do</h2>
        <p>
          MgtWell is a provider of comprehensive monitoring, evaluation, and learning services for organizations. Our goal is to assist our clients in measuring their activities and the results they achieve. We specialize in managing and implementing projects that involve assessing advocacy and long-term policy change efforts. Our approach is tailored to the specific needs of each project and typically involves a mix of quantitative and qualitative data collection methods, gap analysis, and the provision of disaggregated data for vulnerable and gender groups. Our services are driven by a commitment to learning and evidence-based decision-making and are supported by data visualization and communication products. Our services begin with the development of performance and results frameworks, which guide the design of data collection processes that ensure projects are meeting their targets and measuring their successes. In addition to our monitoring and evaluation services, we also assist in the development of knowledge management tools and products to support project outcomes.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="section-title">
        <h2>Technology We Use
        </h2>
        <p>
          At MgtWell, we utilize modern technology to support our centralized monitoring, evaluation, and learning
          (MEAL) systems. Our team of highly qualified and dedicated international and national staff is committed to
          providing top-quality services most cost-effectively. Our full-time core and provincial MEAL and data
          collection specialists are well-versed in the use of the latest data collection, processing, and analysis
          tools such as Open Data Kit (ODK), Kobo toolbox (KOBO), Statistical Package for Social Sciences (SPSS), Stata,
          Microsoft Power BI, Fulcrum, and Tableau.

          We employ mixed research methodologies and state-of-the-art technology to provide our clients with reliable,
          verifiable, and accurate data. Our use of randomized geospatial sampling for surveys, GPS, and time stamps
          enables us to track the time and movement of our field staff and triangulate data for analysis. Additionally,
          we gather data from multiple sources, including observations from field staff, feedback from the beneficiary
          community, satellite imagery, and data from implementing agencies, to ensure that we comprehensively
          understand the project and can present accurate information to our clients.
        </p>
      </div>
    </div>

  </div>
</section>
@endsection