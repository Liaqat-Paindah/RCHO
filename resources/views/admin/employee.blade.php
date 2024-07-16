@extends('admin.dashborad')
@section('contents')

<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Home</a></li>
        <li class="breadcrumb-item active">Employees</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Employees:</h5>

            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Full Name
                    </th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($employees as $employee)
                  <tr>
                    <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                    <td>{{$employee->job_title}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->department_id}}</td>
                    <td>{{$employee->status}}</td>
                    <td>  <a href="{{ url('employee_details', ['id'=>$employee->id]) }}"  class="btn btn-outline-success btn-sm">Details</a>  </td>
  
                  </tr>
                  @endforeach
  
                </tbody>
              </table>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection