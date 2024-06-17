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
    <br><br><br> <br><br>
    <!-- ======= About Section ======= -->

    <section id="services" class="services section section-bg">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 pt-4 pt-lg-0">
                    <div class="section-headline text-center">
                        <h2>Our <span class="highlight"> Services, Focus area, and Strategy</span></h2>
                        <p class="highlight-p">

                            The primary focus of the ARDHO is to reach out to the hard-to-reach population in all
                            provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of
                            services to various marginalized groups in the different sections of society in terms of
                            productive and sustainable livelihood programs, disaster risk management, emergency response
                            and humanitarian assistance. ARDHO works for internally displaced population, poor families,
                            unemployed and uneducated, in need of any sort of emergency and healthcare services.
                            ARDHO aims to tackle the humanitarian crisis including droughts and disaster prevention,
                            develop community basic social services needs and create employment and income generation
                            opportunities for the youth, women, IDPs and poor rural communities to reduce the level of
                            poverty and contribute to the socio-economic development of the communities. Our available
                            team of experts looks at relevant humanitarian needs from various possible angles, analyzes
                            a range of options and recommends the path that would ultimately lead our beneficiaries to
                            desired impacts and sustainable development. We believe in a comprehensive approach that is
                            thorough, proactive, facilitating and result-oriented.
                            Our Core Values

                        </p>
                    </div>
                </div>

                <div class="col-sm-12 pt-4 pt-lg-0">
                    <div class="section-headline text-center">
                        <h2>Our <span class="highlight">Core Values</span></h2>

                    </div>
                </div>
            </div>
            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-gender-female icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Gender Equity</a></h4>
                            <p class="description"> We respect gender diversity and women’s experiences, identities,
                                knowledge and strengths and strive to empower women to realize their full and equal
                                rights.
                            </p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-intersect icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Accountability</a></h4>
                            <p class="description">We are honest and transparent and are committed to evaluating and
                                communicating the outcomes of our work with accountability. We hold ourselves
                                responsible to our partners, our supporters and our beneficiaries. </p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-people-fill icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Collaborativeness</a></h4>
                            <p class="description">We build trusting relationships and strong partnerships as we believe
                                that advancing together with other organizations and network is crucial for achieving
                                progressive change.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-file-bar-graph icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Integrity</a></h4>
                            <p class="description">We will always be true to our values and our mission, acting with
                                honesty and transparency, while ready to be held accountable by our target groups and
                                other stakeholders for all our actions and our use of valuable resources.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>



</main><!-- End #main -->
@endsection