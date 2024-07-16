@extends('admin.dashborad')
@section('contents')

<main id="main" class="main">

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Dashborad</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/employee')}}">Employees</a></li>
      <li class="breadcrumb-item active">More Details</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-12">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Emergency Contacts</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Edit Information </button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#settings">Settings</button>
            </li>


          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Employee Details</h5>

              <div class="row">
                <div class="col-lg-9 col-md-8"> <img src="..\{{$employee->image}}" alt="Profile" class="profile_emp col col-sm-2"> </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8">{{$employee->first_name}} {{$employee->last_name}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Position</div>
                <div class="col-lg-9 col-md-8">{{$employee->job_title}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8">{{$employee->phone_number}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Gender</div>
                <div class="col-lg-9 col-md-8">{{$employee->gender}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                <div class="col-lg-9 col-md-8">{{$employee->date_of_birth}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nationality</div>
                <div class="col-lg-9 col-md-8">{{$employee->nationality}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Department</div>
                <div class="col-lg-9 col-md-8">{{$employee->department_id}}</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Joining Date</div>
                <div class="col-lg-9 col-md-8">{{$employee->joining_date}}</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Address</div>
                <div class="col-lg-9 col-md-8">{{$employee->address}}</div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              <div class="row">
                <div class="col-lg-5 col-md-4 label ">Emergency Contact Name</div>
                <div class="col-lg-7 col-md-8">{{$employee->emergency_contact_name}} </div>
              </div>
                <br>
              <div class="row">
                <div class="col-lg-5 col-md-4 label ">Emergency Contact Number</div>
                <div class="col-lg-7 col-md-8">{{$employee->emergency_contact_number}} </div>
              </div>
              <br>

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">
                  <!-- Profile Edit Form -->
                  <form action="{{ url('employee_edit', $employee->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="..\{{$employee->image}}" alt="Profile" class="col-lg-2">
                        <div class="pt-2">
                          <a href="#" class="btn btn-success btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="first_name" type="text" class="form-control" id="first_name" value="{{$employee->first_name}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="last_name" type="text" class="form-control" id="last_name" value="{{$employee->last_name}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="company" value="{{$employee->email}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Gender:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="gender" type="text" class="form-control" id="Job" value="{{$employee->gender}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">DOB:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="date_of_birth" type="text" class="form-control" id="Country" value="{{$employee->date_of_birth}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Nationality:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nationality" type="text" class="form-control" id="Address" value="{{$employee->nationality}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Address:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Phone" value="{{$employee->address}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Phone Number:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone_number" type="number " class="form-control" id="Email" value="{{$employee->phone_number}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Emergency Contact Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="emergency_contact_name" type="text" class="form-control" id="Twitter" value="{{$employee->emergency_contact_name}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Emergency Contact Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="emergency_contact_number" type="text" class="form-control" id="Facebook" value="{{$employee->emergency_contact_number}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="job_title" class="col-md-4 col-lg-3 col-form-label">Position:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job_title" type="text" class="form-control" id="Instagram" value="{{$employee->job_title}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="joining_date" class="col-md-4 col-lg-3 col-form-label">Joining Date:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="joining_date" type="date" class="form-control" id="Linkedin" value="{{$employee->joining_date}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="joining_date" class="col-md-4 col-lg-3 col-form-label">Department:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="department_id" type="text" class="form-control" id="Linkedin" value="{{$employee->department_id}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="joining_date" class="col-md-4 col-lg-3 col-form-label">Status:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="status" type="text" class="form-control" id="Linkedin" value="{{$employee->status}}">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->


            </div>

          </div><!-- End Bordered Tabs -->

          <div class="tab-pane fade pt-3" id="settings">

            <!-- Settings Form -->
            <form>

              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Delete Employee: </label>
                <div class="col-md-8 col-lg-9 mt-2">
                  <a href="{{ url('employee_delete', ['id'=>$employee->id]) }}" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> </a>
                </div>
            </form><!-- End settings Form -->

          </div>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
@endsection