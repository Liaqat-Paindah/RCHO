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
                            <!-- Display the Careers table -->
                            <table class="table table-bordered bg-white">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Job Title</th>
                                        <th>Salary</th>
                                        <th>Type</th>
                                        <th>Vacancy</th>
                                        <th>Location</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($careers as $career)
                                    <tr>
                                        <td>{{ $career->id }}</td>
                                        <td>{{ $career->job_title }}</td>
                                        <td>{{ $career->salary }}</td>
                                        <td>{{ $career->type }}</td>
                                        <td>{{ $career->vacancy }}</td>
                                        <td>{{ $career->location }}</td>
                                        <td>
                                        <div class="btn-group ml-auto">
                                                <a href="{{url('/jobs_edit', [$career->id])}}" class="btn btn-sm btn-outline-light">Edit</a>
                                                <a href="{{url('/jobs_trash', [$career->id])}}" class="btn btn-sm btn-outline-light"><i class="fa fa-trash"></i></a>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Improved Bootstrap Pagination with custom styles -->
                            <div class="d-flex justify-content-center mt-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <!-- Previous Button -->
                                        <li class="page-item {{ $careers->onFirstPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $careers->previousPageUrl() }}" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        <!-- Page Numbers -->
                                        @foreach ($careers->getUrlRange(1, $careers->lastPage()) as $page => $url)
                                            <li class="page-item {{ $page == $careers->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        <!-- Next Button -->
                                        <li class="page-item {{ $careers->hasMorePages() ? '' : 'disabled' }}">
                                            <a class="page-link" href="{{ $careers->nextPageUrl() }}" aria-label="Next">
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


