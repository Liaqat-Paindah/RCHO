@extends('master')
@section('content')
<style>
    /*--------------------------------------------------------------
    # Services Section
    --------------------------------------------------------------*/
    .services .service-item {
        padding: 30px;
        transition: 0.3s;
        background-color: color-mix(in srgb, var(--default-color), transparent 95%);
    }

    .services .service-item .icon {
        font-size: 36px;
        line-height: 0;
        margin-right: 30px;
        color: var(--accent-color);
    }

    .services .service-item .title {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 20px;
    }

    .services .service-item .title a {
        color: var(--heading-color);
    }

    .services .service-item .description {
        line-height: 24px;
        font-size: 14px;
        margin: 0;
        text-align: justify;
    }

    .services .service-item:hover {
        background-color: color-mix(in srgb, var(--default-color), transparent 92%);
    }
</style>
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us</h3>
            <p >
            Reaching Community & Healthcare
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
                plaguing the province.
                Consequently, the organization’s focus was not
                kept limited either in terms of geography or
                sector. Whilst operating in different districts of
                the province, RCHO has been carrying a range of
                interventions in the areas of education, health
                & hygiene, youth empowerment, emergency
                response & preparedness, governance, free
                legal aid, human rights, etc.
            </p>
          </div>
           <div class="col-sm-12 mt-3">
            <ul>
                <h4> Our Specific Objectives Includes::</h4>
              <li><i class="bx bx-check-double"></i> To Provide quality legal and PSS assistance to children/ juvenile victims of sexual abuse.</li>
              <li> <i class="bx bx-check-double"></i>  To educate the deprived and under privilege common folk about the basic human rights and find basis to incorporate their efforts
              and mobilization to achieve maximum output.</li>
              <li> <i class="bx bx-check-double"></i> To devise and organize for youth youth and children particularly to their rights to acquire educations and improve their health
              and earnings. </li>
              <li> <i class="bx bx-check-double"></i>To establish working relations amongst provincial government, bar councils and like-minded non-government organizations.</li>
              <li> <i class="bx bx-check-double"></i>Improve health conditions by providing basic health and hygiene education and services to the communities residing in neglected
              areas.</li>

            </ul>
           </div>
        </div>

      </div>
    </section><!-- End About Section -->


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

    <section id="services" class="services section section-bg">

        <div class="container">
            <div class="row">
            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-clipboard-data icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Goal</a></h4>
                            <p class="description">The goal of RCHO is to contribute
                                in improving the living standard
                                of the vulnerable communities of
                                Afghanistan through community
                                mobilization, capacity building,
                                advocacy & strengthening of
                                institutions at the grass root level.
                            </p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-eye icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Vision</a></h4>
                            <p class="description">An enabling environment for the
                                realization, respect, and protection of
                                fundamental human rights among youth
                                and develop their leadership qualities to
                                make them active contributors within the
                                society plus make greater understanding
                                of health and illness in children and
                                substantial improvements in health quality
                                for those who have no access to health
                                care facilities.. </p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-gear-wide-connected icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Strategy</a></h4>
                            <p class="description">A sustainable strategy is devised to
                                achieve the maximum, a need based and
                                right based approach initiated ascertains
                                the problem with fully community
                                involvement and mobilizing all indigenous
                                and local resources. The program goal are
                                materialized with a helping hand from
                                member’s donor agencies, Philanthropists.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-file-bar-graph icon flex-shrink-0"></i>
                        <div>


                            <h4 class="title"><a href="#" class="stretched-link">Mission Statement</a></h4>
                            <p class="description">
                                RCHO is to contribute to the education of children
                                and youth, through a value system based, to
                                help build a better world where people are selffulfilled
                                as individuals and play a constructive
                                role in society; continue being an essential
                                resource to provide hope to effectively address
                                prevention and treatment of new and emerging
                                diseases threatening youth.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </div>
        </section>


</main><!-- End #main -->
@endsection
