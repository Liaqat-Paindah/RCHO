@extends('dashboard')
@section('content')
<div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2"> Job Details </h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="{{ url('/dm_jobs') }}" class="breadcrumb-link">Jobs</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page"> Job Details</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                    <div class="col-sm-12 mb-5">
                            <div class="simple-card">
                                <div class="tab-content" id="myTabContent5">
                                    <h2>Job Details</h2>
                              <div class="tab-pane fade show active" id="home-simple" role="tabpanel" aria-labelledby="home-tab-simple">
                                    <table class="table">
                                <tbody >
                                    <tr>
                                        <th>Job Title:</th>
                                        <th>:</th>
                                        <td>{{ $career->job_title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Salary:</th>
                                        <th>:</th>
                                        <td>{{ $career->salary }}</td>
                                    </tr>
                                    <tr>
                                        <th>Location:</th>
                                        <th>:</th>
                                        <td>{{ $career->location }}</td>
                                    </tr>
                                    <tr>
                                        <th>Job Type:</th>
                                        <th>:</th>
                                        <td>{{ $career->type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vacancy Number:</th>
                                        <th>:</th>
                                        <td>{{ $career->vacancy }}</td>
                                    </tr>
                                    <tr>
                                        <th>Application Dateline:</th>
                                        <th>:</th>
                                        <td>{{ $career->application_deadline }}</td>
                                    </tr>
                                    <tr>
                                        <th>Job Description:</th>
                                        <th>:</th>
                                        <td class="text-justify">{{ $career->job_description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qualifications and Requirements:</th>
                                        <th>:</th>
                                        <td class="text-justify">{{ $career->qualifications }}</td>
                                    </tr>
                                </tbody>
                                     </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        @endsection
