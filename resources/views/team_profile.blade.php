@extends('master')
@section('content')
<section class="profile"></section>
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/team')}}">Team</a></li>
                    <li><a href="{{url('/team_profile')}}">Profile</a></li>
                </ol>
            </div>
        </div>
    </section>
<div class="profile">
    <div class="container">
        <div class="section-title">
            <h2>Our Team</h2>
            <p>MgtWell Consulting Services is composed of a diverse team of over 150 experienced professionals,
                including project managers, researchers, data analysts, and experts in monitoring and evaluation, and
                communications. Our team has a wealth of experience and skills in their respective areas of expertise,
                including research and survey, monitoring and evaluation, and management consulting. With years of
                experience in their fields, our team is well-equipped to provide high-quality services and support to
                our clients.</p>
        </div>
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="../{{$team->profile}}" alt="Profile" class="rounded-circle col-sm-6">
                        <h2>{{$team->name}}</h2>
                        <h3>{{$team->position}}</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"
                                    aria-selected="true" role="tab">Overview</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview"
                                role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{$team->name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Position</div>
                                    <div class="col-lg-9 col-md-8">{{$team->position}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Higher Degree</div>
                                    <div class="col-lg-9 col-md-8">{{$team->study_field}} - {{$team->graduation_info}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Experience</div>
                                    <div class="col-lg-9 col-md-8">{{$team->experience}}</div>
                                </div>

                                <div class="row">
                                    <h5 class="card-title">About</h5>
                                    <div class="col-lg-12 col-md-8">
                                        <p class="small">{{$team->desc}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection