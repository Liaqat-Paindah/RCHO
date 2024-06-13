@extends('master')
@section('content')
<br><br><br><br>
        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ url('assets/img/favicon.png')}}" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">{{$careers->job_title}}</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>{{$careers->location}}</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>{{$careers->type}}</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>{{$careers->salary}}</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p class="text-custom">{{$careers->job_description}}</p>
                            <br><br>
                            <h4 class="mb-3">Qualifications</h4>
                                <ul>
                                <li class="text-custom">{{$careers->qualifications}}</li>
                                <li class="text-custom">{{$careers->qualifications}}</li>
                                <li class="text-custom">{{$careers->qualifications}}</li>
                                <li class="text-custom">{{$careers->qualifications}}</li>

                                </ul>

                            <br>
                            <a class="btn btn-outline-success" href="{{ url('/jobs') }}">Apply Now</a>
                        </div>
        
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Published On: {{$careers->created_at}}</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Vacancy: {{$careers->vacancy}}</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Type: {{$careers->type}}</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Salary: {{$careers->salary}}</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Location: {{$careers->location}}</p>
                            <p class="m-0"><i class="fa fa-angle-right text-success me-2"></i>Dateline: {{$careers->application_deadline}}</p>
                        </div>
                        <div class="bg-success rounded p-5  wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4 company-details" >Company Detail</h4>
                            <p class="m-0 text-custom company-details">

                            Afghanistan Research Development and Health organization (ARDHO) is a non-governmental, non-profit and
                humanitarian organization registered with the Ministry of Economy of Afghanistan, established in 2019 by
                a group of young, energetic, motivated, and highly committed youth to address the most urgent and
                pressing needs of the people of Afghanistan to improve and develop the socio-economic status of the
                underprivileged and disadvantaged rural communities in Afghanistan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->
        @endsection