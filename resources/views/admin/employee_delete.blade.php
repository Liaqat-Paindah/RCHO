@extends('admin.dashborad')
@section('contents')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="row">
  <div class="col-sm-12">
  <p class="alert alert-success  show p-3 fs-6" role="alert">
                Employee deleted successfully.
                 </p>
                 <center>
                 <a  href="{{ url('/employee')}}" class="btn btn-outline-success btn-sm">Return</a >
                 </center>

  </div>
</div>
</main><!-- End #main -->
@endsection
