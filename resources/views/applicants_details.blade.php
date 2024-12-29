@extends('dashboard')
@section('content')
<div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2"> Applicant Details </h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page"> Applicant Details</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                    <div class="col-sm-12 mb-5">
                            <div class="simple-card">
                                <div class="tab-content" id="myTabContent5">
                              <div class="tab-pane fade show active" id="home-simple" role="tabpanel" aria-labelledby="home-tab-simple">
                                    <table class="table">
                                <tbody >
                                <tr>
                                        <th>Full Name:</th>
                                        <td>{{ $career->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender:</th>
                                        <td>{{ $career->gender }}</td>
                                    </tr>

                                    <tr>
                                        <th>Date of Birth:</th>
                                        <td>{{ $career->dob }}</td>
                                    </tr>
                                    <tr>
                                        <th>NID or Tazkira:</th>
                                        <td>{{ $career->nid }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ $career->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>{{ $career->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Province or Region:</th>
                                        <td>{{ $career->province }}</td>
                                    </tr>
                                    <tr>
                                        <th>District:</th>
                                        <td>{{ $career->district }}</td>
                                    </tr>
                                    <tr>
                                        <th>Major:</th>
                                        <td>{{ $career->major }}</td>
                                    </tr>

                                    <tr>
                                        <th>Graduation:</th>
                                        <td>{{ $career->graduation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Grade:</th>
                                        <td>{{ $career->grade }}</td>
                                    </tr>

                                    <tr>
                                        <th>Job Title:</th>
                                        <td>{{ $career->job_title }}</td>
                                    </tr>

                                    <tr>
                                        <th>Organization:</th>
                                        <td>{{ $career->company_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Start Date:</th>
                                        <td>{{ $career->start_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>End Date:</th>
                                        <td>{{ $career->end_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Job Description:</th>
                                        <td>{{ $career->job_description }}</td>
                                    </tr>

                                    <tr>
                                        <td> <a href="storage/{{$career->cv}}" class="btn btn-info btn-sm">Download Cv</a> </td>
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
