@extends('master')
@section('content')
<style>

</style>

<br><br><br>
<main id="main">
  <div class="container mt-5">
    <div class="form-container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 p-4 shadow">
        @if(Session::has('success'))
                  <div class="alert alert-success"> {{Session::get('success')}}   </div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger"> {{Session::get('fail')}}   </div>
                  @endif
          <form id="jobApplicationForm" action="{{ url('/jobs') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-step active" id="step1">
              <h4>Step 1: Personal Information</h4>
              <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" name="fullname" id="fullName" required placeholder="Example: Liaqat Paindah">
              </div>
              <br>
              <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" name="dob" id="dob" required>
              </div>
              <br>
              <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" class="form-control" required>
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <br>
              <div class="form-group">
                <label for="NID">Tazkira Number:</label>
                <input type="text" class="form-control" name="nid" id="NID" required placeholder="Example: 1400-0404-98234">
              </div>

              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" id="step2">
              <h4>Step 2: Contact Information</h4>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required placeholder="Example: example@gmail.com">
              </div>
              <br>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required placeholder="Example: +93 (0) 788-234-234">
              </div>

              <br>
              <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" class="form-control" name="province" id="province" required placeholder="Example: Kabul">
              </div>

              <br>
              <div class="form-group">
                <label for="city">City :</label>
                <input type="text" class="form-control" name="city" id="city" required placeholder="Example: Kabul">
              </div>

              <br>
              <div class="form-group">
                <label for="district">District:</label>
                <input type="text" class="form-control" name="district" id="district" required placeholder="Example: 4 District">
              </div>

              <button type="button" class="btn btn-primary mt-2 mr-2" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" id="step3">
              <h4>Step 3: Education Information</h4>
              <div class="form-group">
                <label for="degreeName">Degree Name:</label>
                <select name="degree" id="degreeName" class="form-control" required>
                  <option value="">Select Degree</option>
                  <option value="High School Degree">High School Degree</option>
                  <option value="Bachelor Degree">Bachelor Degree</option>
                  <option value="Master Degree">Master Degree</option>
                  <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                  <option value="Others">Others</option>
                </select>
              </div>
              <br>
              <div class="form-group">
                <label for="major">Major:</label>
                <input type="text" name="major" class="form-control" id="major" required placeholder="Example: Computer Science">
              </div>
              <br>
              <div class="form-group">
                <label for="graduationYear">Graduation Year:</label>
                <input type="number" name="graduation" class="form-control" id="graduationYear" required placeholder="Example: 2022">
              </div>

              <br>
              <div class="form-group">
                <label for="grade">Grade:</label>
                <input type="text" name="grade"  class="form-control" id="grade" required placeholder="Example: A">
              </div>

              <button type="button" class="btn btn-primary mt-2 mr-2" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" id="step4">
              <h4>Step 4: Experience Information</h4>
              <div class="form-group">
                <label for="experience">Experience:</label>
                <textarea class="form-control" name="experience"  id="experience" required></textarea>
              </div>
              <button type="button" class="btn btn-primary mt-2 mr-2" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" id="step5">
              <h4>Step 5: Attachments</h4>
              <div class="form-group">
                <label for="resume">Resume:</label>
                <input type="file" name="cv" class="form-control-file" id="resume" required>
              </div>
              <br>
              <div class="form-group">
                <label for="coverLetter">Cover Letter:</label>
                <input type="file" name="letters" class="form-control-file" id="coverLetter" required>
              </div>
              <button type="button" class="btn btn-primary mt-2 mr-2" onclick="prevStep()">Previous</button>
              <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
          </form>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    var currentStep = 1;

    function nextStep() {
      if (validateStep(currentStep)) {
        var currentDiv = document.getElementById('step' + currentStep);
        currentDiv.classList.remove('active');
        currentStep++;
        var nextDiv = document.getElementById('step' + currentStep);
        if (nextDiv) {
          nextDiv.classList.add('active');
        } else {
          currentStep = 1; // Reset back to step 1 if no more steps
        }
      }
    }

    function prevStep() {
      var currentDiv = document.getElementById('step' + currentStep);
      currentDiv.classList.remove('active');
      currentStep--;
      var prevDiv = document.getElementById('step' + currentStep);
      if (prevDiv) {
        prevDiv.classList.add('active');
      } else {
        currentStep = 6; // Reset to the last step if trying to go back from the first step
      }
    }

    function validateStep(step) {
      var isValid = true;
      var inputs = document.getElementById('step' + step).querySelectorAll('input, select, textarea');
      inputs.forEach(function(input) {
        if (input.hasAttribute('required') && !input.value.trim()) {
          isValid = false;
          input.classList.add('is-invalid');
        } else {
          input.classList.remove('is-invalid');
        }
      });
      return isValid;
    }
  </script>
@endsection
