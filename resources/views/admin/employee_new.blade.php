@extends('admin.dashborad')
@section('contents')
<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Home</a></li>
      <li class="breadcrumb-item active">New Employee</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="page-wrapper">
  <div class="content container-fluid">

    <div class="page-header">
      <div class="row">
        <div class="col">
          <h3 class="page-title">New Employee</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">New Employee</li>
          </ul>

          @if(session()->has('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form action="{{ url('/employee_new') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">First Name:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                    class='la la-user-circle'></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Liaqat"
                  aria-label="Liaqat" required name="first_name" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Last Name:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                    class='la la-user-circle'></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Paindah"
                  aria-label="Liaqat" required name="last_name" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="la la-envelope"></i></span>
                <input type="text" id="basic-icon-default-email" class="form-control" placeholder="example@gmail.com"
                  aria-label="example@gmail.com" required name="email" aria-describedby="basic-icon-default-email2" />
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Gender:</label>
            <div class="col-sm-10 ">
              <div class="input-group input-group-merge ml-4">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" checked="">
                  <label class="form-check-label" for="gender_male">
                    Male
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
                  <label class="form-check-label" for="gender_female">
                    Female
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Date of Birth:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="las la-clock"></i></span>
                <input type="date" class="form-control" id="basic-icon-default-fullname" placeholder="" aria-label=""
                  required name="dob" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nationality:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="la la-group"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Afghan"
                  aria-label="Afghan" required name="nationality" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Address:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="la la-map"></i></span>
                <textarea id="basic-icon-default-message" class="form-control" required name="address"
                  placeholder="Hourse # 10, 3th district, Kabul" aria-label="Hourse # 10, 3th district, Kabul"
                  aria-describedby="basic-icon-default-message2"></textarea>
              </div>
            </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Phone Number:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="las la-phone"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname"
                  placeholder="+93(0) 702-079-812" aria-label="+93(0) 702-079-812" required name="phone_number"
                  aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Job Title:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="las la-briefcase"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Web Developer"
                  aria-label="Web Developer" required name="position" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>



          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Department:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="las la-laptop"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="IT"
                  aria-label="IT" required name="department_id" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>



          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Joining Date:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='la la-clock'></i></span>
                <input type="date" class="form-control" id="basic-icon-default-fullname" required name="joining_date"
                  aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Status:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <select class="select" id="inputGroupSelect02" required name="status">
                  <option selected="">Choose...</option>
                  <option value="Active">Active</option>
                  <option value="In-Active">In-Active</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Emergency Contact
              Name:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="la la-user"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" required
                  name="emergency_contact_name" placeholder="Hindra Sing"
                  aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Emergency Contact
              Phone:</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="las la-phone"></i></span>
                <input type="text" class="form-control" placeholder="0791-819-811" id="basic-icon-default-fullname"
                  required name="emergency_contact_number" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Photo:</label>
            <div class="col-sm-10">
              <div class="input-group">

                <input name="image" type="file" name="file" class="form-control" id="inputGroupFile02" required >
                <label class="input-group-text" for="inputGroupFile02">Upload Photo</label>
              </div>

            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-outline-success  sm-block"> <i class="la la-save"></i>
                Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection