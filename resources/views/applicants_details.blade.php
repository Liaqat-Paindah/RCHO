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
	                                        <li class="breadcrumb-item"><a href="{{ url('/applicants') }}" class="breadcrumb-link">Applicant</a></li>
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
                                    <h2>Applicant Information</h2>
                              <div class="tab-pane fade show active" id="home-simple" role="tabpanel" aria-labelledby="home-tab-simple">
                                    <table class="table">
                                <tbody >
                                <tr>
                                        <th>Full Name:</th>
                                        <th>:</th>
                                        <td>{{ $career->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender:</th>
                                        <th>:</th>
                                        <td>{{ $career->gender }}</td>
                                    </tr>

                                    <tr>
                                        <th>Date of Birth:</th>
                                        <th>:</th>
                                        <td>{{ $career->dob }}</td>
                                    </tr>
                                    <tr>
                                        <th>NID or Tazkira:</th>
                                        <th>:</th>
                                        <td>{{ $career->nid }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <th>:</th>
                                        <td>{{ $career->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <th>:</th>
                                        <td>{{ $career->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Province or Region:</th>
                                        <th>:</th>
                                        <td>{{ $career->province }}</td>
                                    </tr>
                                    <tr>
                                        <th>District:</th>
                                        <th>:</th>
                                        <td>{{ $career->district }}</td>
                                    </tr>
                                    <tr>
                                        <th>Major:</th>
                                        <th>:</th>
                                        <td>{{ $career->major }}</td>
                                    </tr>

                                    <tr>
                                        <th>Graduation:</th>
                                        <th>:</th>
                                        <td>{{ $career->graduation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Grade:</th>
                                        <th>:</th>
                                        <td>{{ $career->grade }}</td>
                                    </tr>

                                    <tr>
                                        <th>Job Title:</th>
                                        <th>:</th>
                                        <td>{{ $career->job_title }}</td>
                                    </tr>

                                    <tr>
                                        <th>Organization:</th>
                                        <th>:</th>
                                        <td>{{ $career->company_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Start Date:</th>
                                        <th>:</th>
                                        <td>{{ $career->start_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>End Date:</th>
                                        <th>:</th>
                                        <td>{{ $career->end_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Job Description:</th>
                                        <th>:</th>
                                        <td>{{ $career->job_description }}</td>
                                    </tr>

                                    <tr>

                                        <td> <a href="../storage/{{$career->cv}}" class="btn btn-rcho btn-sm">Download Cv</a> </td>
                                        <td> <a href="../storage/{{$career->letters}}" class="btn btn-rcho btn-sm">Download Cover Letter</a> </td>
                                        <td> <a href="../storage/{{$career->diploma}}" class="btn btn-rcho btn-sm">Download Diploma</a> </td>
                                        <td> <a href="../storage/{{$career->transcript}}" class="btn btn-rcho btn-sm">Download Transcript</a> </td>
                                        <td> <a href="../storage/{{$career->tazkira}}" class="btn btn-rcho btn-sm">Download Tazkira</a> </td>

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
