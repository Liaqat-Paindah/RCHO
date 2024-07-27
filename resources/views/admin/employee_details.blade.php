@extends('admin.dashborad')
@section('contents')

<div class="page-wrapper">

  <div class="content container-fluid">

    <div class="page-header">
      <div class="row ">
        <div class="col-sm-12">
          <h3 class="page-title">Profile</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card mb-0">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="profile-view">
              <div class="profile-img-wrap">
                <div class="profile-img">
                  <a href="#"><img alt="" src="..\{{$employee->image}}"></a>
                </div>
              </div>
              <div class="profile-basic">
                <div class="row">
                  <div class="col-md-5">
                    <div class="profile-info-left">
                      <h3 class="user-name m-t-0 mb-0">{{$employee->first_name}} {{$employee->last_name}}</h3>
                      <h6 class="text-muted">{{$employee->job_title}}</h6>
                      <small class="text-muted">IT Department</small>

                      <div class="staff-id">Employee ID : FT-0001{{$employee->id}}</div>
                      <div class="small doj text-muted">Date of Join : {{$employee->joining_date}}</div>
                      <br>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <ul class="personal-info">
                      <li>
                        <div class="title">Phone:</div>
                        <div class="text">{{$employee->phone_number}}</div>
                      </li>
                      <li>
                        <div class="title">Email:</div>
                        <div class="text">{{$employee->email}}</div>
                      </li>
                      <li>
                        <div class="title">Birthday:</div>
                        <div class="text">{{$employee->date_of_birth}}</div>
                      </li>
                      <li>
                        <div class="title">Address:</div>
                        <div class="text">{{$employee->address}}</div>
                      </li>
                      <li>
                        <div class="title">Gender:</div>
                        <div class="text">{{$employee->gender}}</div>
                      </li>
                      <li>
                        <div class="title">Stutes:</div>
                        <div class="text">{{$employee->status}}</div>
                      </li>

                      <li>
                        <div class="title">Nationality:</div>
                        <div class="text">{{$employee->nationality}}</div>
                      </li>
                  </div>


                </div>
              </div>

              <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i
                    class="fa fa-pencil"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12 d-flex">
        <div class="card profile-box flex-fill">
          <div class="card-body">
            <h3 class="card-title">Emergency Contact<a href="#" class="edit-icon" data-toggle="modal"
                data-target="#education_info"></a></h3>
            <div class="experience-box">
              <ul class="experience-list">
                <li>
                  <div class="experience-user">
                    <div class="before-circle"></div>
                  </div>
                  <div class="experience-content">
                    <div class="timeline-content">
                      <a href="#/" class="name">Emergency Contact Name:</a>
                      <div>{{$employee->emergency_contact_name}}</div>
                      <br>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="experience-user">
                    <div class="before-circle"></div>
                  </div>
                  <div class="experience-content">
                    <div class="timeline-content">
                      <a href="#/" class="name">mergency Contact Number:</a>
                      <div>{{$employee->emergency_contact_number}}</div>

                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="profile_info" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Profile Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('employee_edit', $employee->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-md-12">
                  <div class="profile-img-wrap edit-img">
                    <img class="inline-block"  src="..\{{$employee->image}}" alt="user">
                    <div class="fileupload btn">
                      <span class="btn-text">edit</span>
                      <input class="upload" type="file" name="profile_image"  value="{{$employee->image}}" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$employee->first_name}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{$employee->last_name}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Date of Birth</label>
                        <div class="cal-icon">
                          <input class="form-control datetimepicker" type="text" name="date_of_birth" value="{{$employee->date_of_birth}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Gender</label>
                          <input class="form-control" type="text" name="gender" value="{{$employee->gender}}">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row p-4">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="{{$employee->address}}">
                  </div>
                </div>
              </div>
                <div class="row p-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{$employee->email}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" value="{{$employee->phone_number}}">
                  </div>
                </div>
              </div>
              <div class="row p-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nationality</label>
                    <input type="text" class="form-control" name="nationality" value="{{$employee->nationality}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" class="form-control" name="job_title" value="{{$employee->job_title}}">
                  </div>
                </div>
              </div>
              <div class="row p-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Joining Date</label>
                    <input type="text" class="form-control datetimepicker" name="joining_date" value="{{$employee->joining_date}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label> Status</label>
                    <input type="text" class="form-control " name="status" value="{{$employee->status}}">
                  </div>
                </div>
              </div>
              <div class="row p-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Department</label>
                    <input type="text" class="form-control " name="department_id" value="{{$employee->department_id}}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label> Emergency Contact Name</label>
                    <input type="text" class="form-control " name="emergency_contact_name" value="{{$employee->emergency_contact_name}}">
                  </div>
                </div>
              </div>
              <div class="row p-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Emergency Contact Number</label>
                    <input type="text" class="form-control " name="emergency_contact_number" value="{{$employee->emergency_contact_number}}">
                  </div>
                </div>

                <div class="submit-section">
                  <button class="btn btn-primary submit-btn">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main><!-- End #main -->
  @endsection