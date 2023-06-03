@extends('admin.master')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('team_member')}}">Teams</a></li>
            <li class="breadcrumb-item active">Team Member Edit</li>
        </ol>
    </nav>
</div>
<section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="true" role="tab">Add Team</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit" role="tabpanel">
                  @if(Session::has('success'))
                  <div class="alert alert-success"> {{Session::get('success')}}   </div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger"> {{Session::get('fail')}}   </div>
                  @endif
                  <form action="{{ url('member_add') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                      <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullname" type="text" class="form-control" id="fullName" value="">
                        <div class="text-danger">@error('fullname') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Postion</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="postion" type="text" class="form-control" id="company" value="">
                        <div class="text-danger">@error('postion') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Experience</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="experience" type="text" class="form-control" id="Job" value="">
                        <div class="text-danger">@error('experience') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Higher Degree</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="degree" type="text" class="form-control" id="Country" value="">
                        <div class="text-danger">@error('degree') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Degree 02</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="graduation" type="text" class="form-control" id="Address" value="">
                        <div class="text-danger">@error('graduation') {{$message}} @enderror</div>

                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Desc</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="desc" class="form-control" id="about" style="height: 100px"></textarea>
                        <div class="text-danger">@error('desc') {{$message}} @enderror</div>

                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="file" class="form-control" name="image" title="Upload new profile image">
                        <div class="text-danger">@error('image') {{$message}} @enderror</div>

                        </div>
                      </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
@endsection