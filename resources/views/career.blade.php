@extends('master')
@section('content')

<br><br><br>
        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            @foreach($careers as $career)

                            <div class="job-item p-4 mb-4">

                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="assets/img/favicon.png" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{{$career->job_title}}</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>{{$career->location}}</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>{{$career->type}}</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>{{$career->salary}}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            
                                            <a class="btn btn-success" href="{{url('job-details',  ['id'=> $career->id])}}">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Dateline: {{$career->application_deadline}}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <a class="btn btn-success py-3 px-5" href="">Browse More Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->

@endsection
