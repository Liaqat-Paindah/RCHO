@extends('master')
@section('content')
<br><br><br> <br><br> 
<main class="main">
    <!-- Page Title -->
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2 >Our <span class="highlight">Services</span></h2>
                                <p class="highlight-p">The primary focus of the ARDHO is to reach out to the hard-to-reach population in all
                                    provinces of Afghanistan, often under very difficult circumstances, to offer a wide
                                    range of services to various marginalized groups in the different sections of
                                    society in terms of productive and sustainable livelihood programs, disaster risk
                                    management, emergency response and humanitarian assistance. ARDHO works for
                                    internally displaced population, poor families, unemployed and uneducated, in need
                                    of any sort of emergency and healthcare services.
                                    ARDHO aims to tackle the humanitarian crisis including droughts and disaster
                                    prevention, develop community basic social services needs and create employment and
                                    income generation opportunities for the youth, women, IDPs and poor rural
                                    communities to reduce the level of poverty and contribute to the socio-economic
                                    development of the communities. Our available team of experts looks at relevant
                                    humanitarian needs from various possible angles, analyzes a range of options and
                                    recommends the path that would ultimately lead our beneficiaries to desired impacts
                                    and sustainable development. We believe in a comprehensive approach that is
                                    thorough, proactive, facilitating and result-oriented.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">
            @foreach($services as $service)
            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4>Services List</h4>
                        <div class="services-list">
                            <a href="/services/humanitarian" class="{{$service->service_name}}"><i class="bi bi-arrow-right-circle"></i><span>humanitarian</span></a>
                            <a href="/services/Development" class="{{$service->service_name}}"><i class="bi bi-arrow-right-circle"></i><span>Development</span></a>
                            <a href="/services/Research" class="{{$service->service_name}}"><i class="bi bi-arrow-right-circle"></i><span>Research</span></a>
                            <a href="/services/Education" class="{{$service->service_name}}"><i class="bi bi-arrow-right-circle"></i><span>Education</span></a>
                            <a href="/services/Health" class="{{$service->service_name}}"><i class="bi bi-arrow-right-circle"></i><span>Health</span></a>
                            <a href="/services/Nutrition" class="{{$service->service_name}}"><i class="bi bi-arrow-right-circle"></i><span>Nutrition</span></a>
                            <a href="/services/Agriculture" class="{{$service->service_name}}"><i class="bi bi-arrow-right-circle"></i><span>Agriculture</span></a>

                        </div>

                    </div><!-- End Services List -->
                    <a href="{{url('/request')}}">
                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-download help-icon"></i>
                        <br>
                        <h4>Request Profile?</h4>
                        <p style="color:white">Please click here for downloading Organization Profile</p>
                    </div>
                </a>


                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{$service->image}}" alt="al" class="img-fluid services-img">
                    <h3>{{$service->service_name}}
                    </h3>
                    <p class="highlight-p"> {{$service->description}}  </p>
                </div>
            </div>
            @endforeach
        </div>

    </section><!-- /Service Details Section -->

</main>
@endsection