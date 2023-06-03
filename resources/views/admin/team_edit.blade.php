@extends('admin.master')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Teams</a></li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="false" role="tab" tabindex="-1">Overview</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="true" role="tab">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade profile-overview" id="profile-overview" role="tabpanel">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">Web Designer</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">USA</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit" role="tabpanel">

                  <!-- Profile Edit Form -->
                  @if(Session::has('success'))
                  <div class="alert alert-success"> {{Session::get('success')}}   </div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger"> {{Session::get('fail')}}   </div>
                  @endif
                  <form action="{{ url('team_update/'.$team->id) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                      <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullname" type="text" class="form-control" id="fullName" value="{{$team->name}}">
                        <div class="text-danger">@error('fullname') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Postion</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="postion" type="text" class="form-control" id="company" value="{{$team->position}}">
                        <div class="text-danger">@error('postion') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Experience</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="experience" type="text" class="form-control" id="Job" value="{{$team->experience}}">
                        <div class="text-danger">@error('experience') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Higher Degree</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="graduation" type="text" class="form-control" id="Country" value="{{$team->study_field}}">
                        <div class="text-danger">@error('graduation') {{$message}} @enderror</div>

                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Degree 02</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="degree" type="text" class="form-control" id="Address" value="{{$team->graduation_info}}">
                        <div class="text-danger">@error('degree') {{$message}} @enderror</div>

                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Desc</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="desc" class="form-control" id="about" style="height: 100px" >{{$team->desc}}</textarea>
                        <div class="text-danger">@error('desc') {{$message}} @enderror</div>

                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="file" class="form-control" value="profile" name="image" title="Upload new profile image">
                        <div class="text-danger">@error('image') {{$message}} @enderror</div>

                        </div>
                      </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-warning"> <i class="bi bi-save" ></i> Save</button>
                      <a href="{{url('team_member')}}" class="btn btn-primary"> <i class="bi bi-back" ></i> Back</a>
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