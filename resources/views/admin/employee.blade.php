@extends('admin.dashborad')
@section('contents')
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Employees</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ url('/admin')}}">Dashboard</a></li>
<li class="breadcrumb-item active">Employees</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">

<div class="table-responsive">
<table class="table datatable table-striped table">
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
                    <td>  <a href="{{ url('employee_details', ['id'=>$employee->id]) }}"  class="btn btn-outline-success btn-sm"><i class="material-icons"></i></a>  </td>
  
                  </tr>
                  
                  @endforeach
  
                </tbody>
              </table>
</div>

</div>
</div>
</div>
</div>
@endsection