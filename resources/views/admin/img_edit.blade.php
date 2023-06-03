@extends('admin.master')
@section('contents')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title text-center">Edit Image</h5>
        <p class="text-center">Fill the below form to upload new image in gallary</p>
        @if(Session::has('success'))
        <div class="alert alert-success"> {{Session::get('success')}}   </div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger"> {{Session::get('fail')}}   </div>
        @endif
        </div>
<div class="row">
    <div class="col-sm-12  p-4">
        <div class="form">
            <form action="{{ url('image_update', $image->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Image Title:</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Image Title" value="{{$image->name}}" >
                  <div class="text-danger">@error('name') {{$message}} @enderror</div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="">Image field:</label>
                    <select class="form-select" required name="fields">
                        <option selected disabled>Please select image field...</option>
                        <option value="Events">Events</option>
                        <option value="Projects">Projects</option>
                        <option value="Trainings">Trainings</option>
                        <option value="Employees">Employees</option>
                      </select>
                  <div class="text-danger">@error('fields') {{$message}} @enderror</div>

                </div>
              </div>
              <div class="form-group mt-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Please select image</label>
                    <input class="form-control " name="image" value="{{$image->image}}" type="file" id="formFile">
                  <div class="text-danger">@error('image') {{$message}} @enderror</div>

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