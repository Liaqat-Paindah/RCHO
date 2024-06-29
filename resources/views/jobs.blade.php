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
          <div class="alert alert-success"> {{Session::get('success')}} </div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger"> {{Session::get('fail')}} </div>
          @endif
          <form id="jobApplicationForm" action="{{ url('/jobs') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-step active" id="step1">
              <h4>Step 1: Personal Information</h4>
              <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" name="fullname" id="fullName" required
                  placeholder="Example: Liaqat Paindah">
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
                <input type="text" class="form-control" name="nid" id="NID" required
                  placeholder="Example: 1400-0404-98234">
              </div>

              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" id="step2">
              <h4>Step 2: Contact Information</h4>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required
                  placeholder="Example: example@gmail.com">
              </div>
              <br>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required
                  placeholder="Example: +93 (0) 788-234-234">
              </div>

              <br>
              <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" class="form-control" name="province" id="province" required
                  placeholder="Example: Kabul">
              </div>

              <br>
              <div class="form-group">
                <label for="city">City :</label>
                <input type="text" class="form-control" name="city" id="city" required placeholder="Example: Kabul">
              </div>

              <br>
              <div class="form-group">
                <label for="district">District:</label>
                <input type="text" class="form-control" name="district" id="district" required
                  placeholder="Example: 4 District">
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
                <input type="text" name="major" class="form-control" id="major" required
                  placeholder="Example: Computer Science">
              </div>
              <br>
              <div class="form-group">
                <label for="graduationYear">Graduation Year:</label>
                <input type="number" name="graduation" class="form-control" id="graduationYear" required
                  placeholder="Example: 2022">
              </div>

              <br>
              <div class="form-group">
                <label for="grade">Grade:</label>
                <input type="text" name="grade" class="form-control" id="grade" required placeholder="Example: A">
              </div>

              <button type="button" class="btn btn-primary mt-2 mr-2" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>



            <div class="form-step" id="step4">
              <h4>Step 4: Experience Information</h4>
              <div class="form-group">
                <label for="experience">Do you have work experience?</label>
                <select onchange="toggleButton()" name="experience" class="form-control" id="Yes_No">
                  <Option value="disabled">...</Option>
                  <Option value="Yes">Yes</Option>
                  <option value="No">No</option>
                </select>
              </div>
              <div id="workExperienceContainer">
                <!-- This container will hold dynamically added work experience fields -->
              </div>
              <button id="addButton" type="button" class="btn btn-success mt-2" onclick="addWorkExperience()">Add Work
                Experience</button>
              <button type="button" class="btn btn-primary mt-2 mr-2" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" id="step5">
              <h4>Step 4: Reference</h4>
              <div class="form-group">
                <label for="experience">Do you have reference?</label>
                <select onchange="ReferenceButton()" name="experience" class="form-control" id="YesNo">
                  <Option value="disabled">...</Option>
                  <Option value="Yes">Yes</Option>
                  <option value="No">No</option>
                </select>
              </div>
              <div id="workExperienceContainer2">
                <!-- This container will hold dynamically added work experience fields -->
              </div>
              <button id="addButton1" type="button" class="btn btn-success mt-2" onclick="addReference()">Add Reference</button>
              <button type="button" class="btn btn-primary mt-2 mr-2" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary mt-2" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" id="step6">
              <h4>Step 6: Attachments</h4>
              <div class="form-group">
                <label for="resume">Resume:</label>
                <input type="file" name="cv" class="form-control-file" id="resume" required>
              </div>
              <br>
              <div class="form-group">
                <label for="coverLetter">Cover Letter:</label>
                <input type="file" name="letters" class="form-control-file" id="coverLetter" required>
              </div>

              <div class="form-group">
                <label for="coverLetter">Diploma:</label>
                <input type="file" name="diploma" class="form-control-file" id="diploma" required>
              </div>
              <div class="form-group">
                <label for="coverLetter">NID || Tazkira:</label>
                <input type="file" name="tazkira" class="form-control-file" id="tazkira" required>
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

document.addEventListener('DOMContentLoaded', function() {
  var addButton = document.getElementById('addButton');
  addButton.style.display = 'none'; // Ensure button is hidden initially
});

function toggleButton() {
  var Yes_No = document.getElementById('Yes_No');
  var addButton = document.getElementById('addButton');

  if (Yes_No.value == 'Yes') {
    addButton.style.display = 'block';
  } else {
    addButton.style.display = 'none';
  }
}


document.addEventListener('DOMContentLoaded', function() {
  var addButton1 = document.getElementById('addButton1');
  addButton1.style.display = 'none'; // Ensure button is hidden initially
});
function ReferenceButton() {
  var YesNo = document.getElementById('YesNo');
  var addButton1= document.getElementById('addButton1');

  if (YesNo.value == 'Yes') {
    addButton1.style.display = 'block';
  } else {
    addButton1.style.display = 'none';
  }
}

    var workExperienceCount = 0;

    function addWorkExperience() {
      workExperienceCount++;

      var container = document.getElementById('workExperienceContainer');

      var workExperienceHTML = `
    <div class="work-experience-item mb-3">
      <div class="form-group">
        <label for="job-title-${workExperienceCount}">Job Title</label>
        <input type="text" class="form-control" id="job-title-${workExperienceCount}" name="job_titles[]" placeholder="Enter job title">
      </div>
      <div class="form-group">
        <label for="company-name-${workExperienceCount}">Company Name</label>
        <input type="text" class="form-control" id="company-name-${workExperienceCount}" name="company_names[]" placeholder="Enter company name">
      </div>
      <div class="form-group">
        <label for="start-date-${workExperienceCount}">Start Date</label>
        <input type="date" class="form-control" id="start-date-${workExperienceCount}" name="start_dates[]">
      </div>
      <div class="form-group">
        <label for="end-date-${workExperienceCount}">End Date</label>
        <input type="date" class="form-control" id="end-date-${workExperienceCount}" name="end_dates[]">
      </div>
      <div class="form-group">
        <label for="job-description-${workExperienceCount}">Job Description</label>
        <textarea class="form-control" id="job-description-${workExperienceCount}" name="job_descriptions[]" rows="3" placeholder="Enter job description"></textarea>
      </div>
      <br>
      <button type="button" class="btn btn-danger btn-sm" onclick="removeWorkExperience(this)">Remove</button>
    </div>
  `;

      var wrapper = document.createElement('div');
      wrapper.innerHTML = workExperienceHTML;
      container.appendChild(wrapper);
    }

    function removeWorkExperience(button) {
      var itemToRemove = button.closest('.work-experience-item');
      itemToRemove.remove();
    }


    var ReferenceCount = 0;

function addReference() {
  ReferenceCount++;

  var container = document.getElementById('workExperienceContainer2');

  var ReferenceHTML = `
<div class="refence-item mb-3">
  <div class="form-group">
    <label for="job-title-${ReferenceCount}">Reference Name</label>
    <input type="text" class="form-control" id="job-title-${ReferenceCount}" name="reference_name[]" placeholder="Enter Reference Name">
  </div>
  <div class="form-group">
    <label for="reference-type-${ReferenceCount}">Reference Type</label>
    <input type="text" class="form-control" id="reference-type-${ReferenceCount}" name="reference_type[]" placeholder="Enter Reference Type">
  </div>
  <div class="form-group">
    <label for="relationship-${ReferenceCount}">Relationship</label>
    <input type="text" class="form-control" id="relationship-${ReferenceCount}" name="relationship[]" placeholder="Enter Relationship">
  </div>

  <div class="form-group">
    <label for="organization-${ReferenceCount}">Organization</label>
    <input type="text" class="form-control" id="organization-${ReferenceCount}" name="organization[]" placeholder="Enter Organization">
  </div>


<div class="form-group">
<label for="email-${ReferenceCount}">Email</label>
<input type="email" class="form-control" id="email-${ReferenceCount}" name="email[]" placeholder="Enter email address">
</div>

<div class="form-group">
<label for="phone-${ReferenceCount}">Phone</label>
<input type="number" class="form-control" id="phone-${ReferenceCount}" name="phone[]"  placeholder="Enter phone number">
</div>

<div class="form-group">
<label for="position-${ReferenceCount}">Position</label>
<input type="text" class="form-control" id="position-${ReferenceCount}" name="position[]" placeholder="Enter Position">
</div>

<div class="form-group">
<label for="association-start-${ReferenceCount}">Association Start</label>
<input type="date" class="form-control" id="association-start-${ReferenceCount}" name="association_start[]">
</div>

    <div class="form-group">
<label for="association-end-${ReferenceCount}">Association End</label>
<input type="date" class="form-control" id="association-end-${ReferenceCount}" name="association_end[]">
</div>

<div class="form-group">
<label for="perspective_comments-${ReferenceCount}">Perspective Comments</label>
<textarea class="form-control" id="perspective-comments-${workExperienceCount}" name="perspective-comments[]" rows="3" placeholder="Enter perspective comments"></textarea>
</div>


  <br>
  <button type="button" class="btn btn-danger btn-sm" onclick="removeReference(this)">Remove</button>
</div>
`;

  var wrapper1 = document.createElement('div');
  wrapper1.innerHTML = ReferenceHTML;
  container.appendChild(wrapper1);
}

function removeReference(button) {
  var itemToRemove = button.closest('.refence-item');
  itemToRemove.remove();
}



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
        currentStep = 7; // Reset to the last step if trying to go back from the first step
      }
    }

    function validateStep(step) {
      var isValid = true;
      var inputs = document.getElementById('step' + step).querySelectorAll('input, select, textarea');
      inputs.forEach(function (input) {
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