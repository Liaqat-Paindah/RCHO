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
          At MgtWell Consulting Services, we offer a range of services to help our clients achieve their goals and improve their performance. Whether you need strategic advice, operational support, or evaluation and feedback, we have the expertise and experience to deliver.
One of our core services is management consulting. We help our clients with various aspects of their business, such as strategy, organization, operations, innovation, and change management. We work closely with our clients to understand their needs, challenges, and opportunities, and provide them with tailored solutions that fit their context and objectives. We also help them implement and monitor the results of our recommendations, ensuring that they get the best value from our service.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section-title">
        <p>Another key service we offer is monitoring and evaluation (M&E). We help our clients measure and assess the impact and effectiveness of their projects, programs, or policies. We use a variety of methods and tools to collect and analyze data, such as surveys, interviews, focus groups, observations, case studies, and more. We also help our clients design and implement M&E systems that are robust, reliable, and user-friendly. We provide them with clear and concise reports that highlight the main findings, lessons learned, and recommendations for improvement.
If you are interested in learning more about our consulting services or working with us on your next project, please contact us today. We would love to hear from you and discuss how we can help you succeed.
        </p>
      </div>
    </div>

  </div>
</section>
<section id="services3" class="services3 section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Technology We Use</h2>
          <p>At MgtWell Consulting Services, we are always looking for ways to improve our services and deliver value to our clients. One of the ways we do that is by using cutting-edge technology to enhance our consulting services for management consulting and monitoring and evaluation.
           For management consulting, we use a variety of tools to help us analyze data, create reports, and communicate with our clients. Some of the technology we use includes:
        </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clipboard-data"></i></div>
              <h4 class="title"><a href="">Power BI</a></h4>
              <p class="description">This is a powerful data visualization and analytics tool that allows us to create interactive dashboards and reports that show key insights and trends from our data. We can also share these dashboards and reports with our clients online or offline, and they can access them from any device.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-microsoft-teams"></i></div>
              <h4 class="title"><a href="">Microsoft Teams</a></h4>
              <p class="description">This is a collaboration platform that enables us to communicate with our clients and colleagues in real time, through chat, voice, and video calls. We can also share files, documents, and presentations, and co-edit them with our clients. Microsoft Teams also integrates with other Microsoft apps, such as Outlook, Word, Excel, and PowerPoint, making it easy to switch between different tasks.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-share-fill"></i></div>
              <h4 class="title"><a href="">SharePoint</a></h4>
              <p class="description">This is a cloud-based service that allows us to store, manage, and share documents and files with our clients and colleagues. We can also create sites and pages to showcase our work and provide updates on our projects. SharePoint also has features such as version control, workflows, and permissions, that help us keep track of changes and ensure security.</p>
            </div>
          </div>
        </div>
        <p class="description">
          For monitoring and evaluation, we use technology to help us collect data, measure impact, and report on outcomes. Some of the technology we use includes:
          At MgtWell, we utilize modern technology to support our centralized monitoring, evaluation, and learning (MEAL) systems. Our team of highly qualified and dedicated international and national staff is committed to providing top-quality services most cost-effectively. Our full-time core and provincial MEAL and data collection specialists are well-versed in the use of the latest data collection, processing, and analysis tools such as Open Data Kit (ODK), Kobo toolbox (KOBO), Statistical Package for Social Sciences (SPSS), Stata, Microsoft Power BI, Fulcrum, and Tableau.
          We employ mixed research methodologies and state-of-the-art technology to provide our clients with reliable, verifiable, and accurate data. Our use of randomized geospatial sampling for surveys, GPS, and time stamps enables us to track the time and movement of our field staff and triangulate data for analysis. Additionally, we gather data from multiple sources, including observations from field staff, feedback from the beneficiary community, satellite imagery, and data from implementing agencies, to ensure that we comprehensively understand the project and can present accurate information to our clients.

        </p>

      </div>
    </section><!-- End Services Section -->
@endsection