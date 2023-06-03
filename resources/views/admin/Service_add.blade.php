@extends('admin.master')
@section('contents')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title text-center">New Service</h5>
        <p class="text-center">Fill the below form to add new service.</p>
                 @if(session()->has('status'))
               <p class="alert alert-success alert-dismissible fade show p-3 fs-6" role="alert">
                {{ session()->get('status') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </p>
             @endif
                    </div>
<div class="row">
    <div class="col-sm-12  p-4">
        <div class="form">
            <form action="{{ url('service_add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Service Name:</label>
                  <input type="text" name="title" required class="form-control" id="name" placeholder="Image Title" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="">Catagory:</label>
                    <select name="type" class="form-select">
                        <option value="1">Monitoring & Evaluation</option>
                        <option value="2">Management Consulting </option>
                    </select>
                </div>
              </div>
              <div class="form-group mt-3">
                <div class="mb-3">
                    <label for=""> Icon:</label>
                    <input type="file" name="file" required class="form-control" id="name" placeholder="Image Title" data-rule="minlen:4" data-msg="Please enter at least 4 chars">          
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <textarea name="Desc" class="form-control" cols="30" rows="10" placeholder="Service description in here..."></textarea>
                    <br> <hr>
                </div>
              </div>
             <button class="btn btn-warning btn-sm" type="submit"> <i class="bi bi-save"></i> Add Service</button>
             <a href="{{url('service_list')}}" class="btn btn-primary btn-sm"> <i class="bi bi-back" ></i> Back</a>
            </form>
          </div>
    </div>
</div>
</div>
        </div>
      </div>
</section>
@endsection