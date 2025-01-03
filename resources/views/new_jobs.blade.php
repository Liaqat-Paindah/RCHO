@extends('dashboard')
@section('content')
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2"> Dashboard  </h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Jobs</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page">  New Job</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>

                        <div class="col-sm-12">
                            <form id="jobApplicationForm" class="bg-white p-4 shadow-lg" action="{{ url('/new_jobs') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Step 1: Personal Information -->
                                <div class="form-step active" id="step1">
                                  <h2>New Job</h2>

                                  <div class="form-group">
                                    <label for="fullName">Job Title:</label>
                                    <input type="text" class="form-control"  name="job_title" id="job_title" required placeholder="Example: Software Developer">
                                  </div>
                                  <div class="form-group">
                                    <label for="dob">Job Description:</label>
                                    <textarea name="job_description" id="job_description" class="form-control"  required placeholder="Write here..."></textarea>
                                  </div>


                                  <div class="form-group">
                                    <label for="phone">Qualification:</label>
                                    <textarea name="qualifications" id="qualifications" class="form-control" required placeholder="Write here..."></textarea>

                                  </div>
                                  <div class="form-group">
                                    <label for="province">Salary:</label>
                                    <input type="text" class="form-control"  name="salary" id="salary" required placeholder="Ex: 18500 Afghani">
                                  </div>
                                  <div class="form-group">
                                    <label for="city">Location:</label>
                                    <input type="text" class="form-control"  name="location" id="location" required placeholder="Kabul">
                                  </div>
                                  <div class="form-group">
                                    <label for="district">Type:</label>
                                    <input type="text" class="form-control"  name="type" id="type" required placeholder="Ex: Full Time">
                                  </div>
                                  <div class="form-group">
                                    <label for="district">Vacancy Number:</label>
                                    <input type="text" class="form-control"  name="vacancy" id="vacancy" required placeholder="Ex: US_266144">
                                  </div>

                                  <div class="form-group">
                                    <label for="district">Application Deadline:</label>
                                    <input type="date" class="form-control"  name="application_deadline" id="application_deadline" required placeholder="Ex: 2025-02-12">
                                  </div>

                                  <button type="submit" class="btn btn-primary" >Save</button>
                                </div>
                              </form>
                              <br>

                        </div>
	                </div>
	                    </div>
	        </div>
@endsection


