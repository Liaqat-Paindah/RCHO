@extends('admin.master')
@section('contents')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title text-center">New Image</h5>
        <p class="text-center">Fill the below form to upload new image in gallary</p>
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
            <form action="{{ url('add_image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Image Title:</label>
                  <input type="text" name="name" required class="form-control" id="name" placeholder="Image Title" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="">Image field:</label>
                    <select class="form-select" required name="field">
                        <option selected disabled>Please select image field...</option>
                        <option value="Events">Events</option>
                        <option value="Projects">Projects</option>
                        <option value="Trainings">Trainings</option>
                        <option value="Employees">Employees</option>
                      </select>
                </div>
              </div>
              <div class="form-group mt-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Please select image</label>
                    <input class="form-control " name="file" required type="file" id="formFile">
                  </div>
              </div>
             <button class="btn btn-warning btn-sm" type="submit"> <i class="bi bi-save"></i> Save Image</button>
             <a href="{{url('img_list')}}" class="btn btn-primary btn-sm"> <i class="bi bi-back" ></i> Back</a>

            </form>
          </div>
    </div>
</div>
</div>
        </div>
      </div>
</section>
@endsection