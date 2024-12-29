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
	                                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page"> Jobs</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                    <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Jobs</h5>
	                                        <h2 class="mb-0"> {{$total_jobs}}</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-briefcase fa-fw fa-sm text-primary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Applicants</h5>
	                                        <h2 class="mb-0"> {{$total_applicants}}</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-user fa-fw fa-sm text-primary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Services</h5>
	                                        <h2 class="mb-0">{{$total_services}}</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-cogs fa-fw fa-sm text-primary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Users</h5>
	                                        <h2 class="mb-0"> {{$total_users}}</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-user fa-fw fa-sm text-primary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

                            <!-- Display the applicants table -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Major</th>
                                        <th>degree</th>
                                        <th>CV</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applicants as $career)
                                    <tr>
                                        <td>{{ $career->fullname }}</td>
                                        <td>{{ $career->gender }}</td>
                                        <td>{{ $career->email }}</td>
                                        <td>{{ $career->phone }}</td>
                                        <td>{{ $career->major }}</td>
                                        <td>{{ $career->degree }}</td>
                                        <td class="text-center">
                                            <a href="storage/{{$career->cv}}" class="text-rcho">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                        <td><a href="{{ url('/applicants_details', [$career->id])}}">details</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Improved Bootstrap Pagination with custom styles -->
                            <div class="d-flex justify-content-center mt-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <!-- Previous Button -->
                                        <li class="page-item {{ $applicants->onFirstPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $applicants->previousPageUrl() }}" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        <!-- Page Numbers -->
                                        @foreach ($applicants->getUrlRange(1, $applicants->lastPage()) as $page => $url)
                                            <li class="page-item {{ $page == $applicants->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        <!-- Next Button -->
                                        <li class="page-item {{ $applicants->hasMorePages() ? '' : 'disabled' }}">
                                            <a class="page-link" href="{{ $applicants->nextPageUrl() }}" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

	                    </div>
	                    </div>
	        </div>
@endsection


