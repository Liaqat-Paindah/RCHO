@extends('master')
@section('content')
<style>
     .form-step {
    display: none;
  }
  .form-step.active {
    display: block;
  }

  .form-container {
    background-color: #f7fbfe;
    border-radius: 8px;
    padding: 30px;
    border: 1px solid rgb(209, 229, 245);
  }

  h4 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    font-weight: bold;
    color: #023363;
  }

  .form-group {
    margin-bottom: 10px;
  }

  .form-group label {
    font-size: 14px;
    font-weight: 500;
    color: #023363;
  }

  .form-control {
    font-size: 1rem;
    padding: 9px;
    border-radius: 3px;
    font-size: 13px;
    border: 1px solid #ccc;
    transition: all 0.3s ease;
  }

  .form-control:focus {
    border-color: #00a0e4;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
  }

  .form-control-file {
    border: 1px solid #ccc;
    padding: 4px;
    font-size: 13px;
    border-radius: 3px;
    background-color: #fff;
    transition: all 0.3s ease;
  }

  .form-control-file:hover {
    border-color: #00a0e4;
  }

  .form-text {
    font-size: 0.875rem;
    color: #6c757d;
  }

  .btn {
    font-size: 1rem;
    padding: 6px 20px;
    border-radius: 5px;
    border: none;
    transition: all 0.3s ease;
  }

  .btn-primary {
    background-color: #00a0e4;
    color: #fff;
  }

  .btn-primary:hover {
    background-color: #00a0e4;
    cursor: pointer;
  }

  .btn-success {
    background-color: #28a745;
    color: #fff;
  }

  .btn-success:hover {
    background-color: #218838;
    cursor: pointer;
  }

  .d-flex {
    display: flex;
  }

  .justify-content-between {
    justify-content: space-between;
  }
</style>

<main id="main">
  <div class="container mt-5">
    <div class="form-container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 p-4">
          @if(Session::has('success'))
          <div class="alert alert-success"> {{ Session::get('success') }} </div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger"> {{ Session::get('fail') }} </div>
          @endif

          <form id="jobApplicationForm" action="{{ url('/jobs') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Step 1: Personal Information -->
            <div class="form-step active" id="step1">
              <h4>Step 1: Personal Information</h4>
              <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" name="fullname" id="fullName" required placeholder="Example: Liaqat Paindah">
              </div>
              <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" name="dob" id="dob" required>
              </div>
              <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" class="form-control" required>
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="form-group">
                <label for="NID">Tazkira Number:</label>
                <input type="text" class="form-control" name="nid" id="NID" required placeholder="Example: 1400-0404-98234">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required placeholder="example@gmail.com">
              </div>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required placeholder="+93 (0) 788-234-234">
              </div>
              <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" class="form-control" name="province" id="province" required placeholder="Kabul">
              </div>
              <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" id="city" required placeholder="Kabul">
              </div>
              <div class="form-group">
                <label for="district">District:</label>
                <input type="text" class="form-control" name="district" id="district" required placeholder="4 District">
              </div>
              <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 2: Education Information -->
            <div class="form-step" id="step2">
              <h4>Step 2: Education Information</h4>
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
              <div class="form-group">
                <label for="major">Major:</label>
                <input type="text" name="major" class="form-control" id="major" required placeholder="Computer Science">
              </div>
              <div class="form-group">
                <label for="graduationYear">Graduation Year:</label>
                <input type="number" name="graduation" class="form-control" id="graduationYear" required placeholder="2022">
              </div>
              <div class="form-group">
                <label for="grade">Grade:</label>
                <input type="text" name="grade" class="form-control" id="grade" required placeholder="A">
              </div>
              <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 3: Experience Information -->
            <div class="form-step" id="step3">
              <h4>Step 3: Experience Information</h4>
              <div class="form-group">
                    <label for="experience">Do you have work experience?</label>
                    <select onchange="toggleButton()" name="experience" class="form-control" id="Yes_No" required>
                      <option value="">...</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
              </div>
              <div id="workExperienceContainer"></div>
              <button id="addButton" type="button" class="btn btn-success" onclick="addWorkExperience()">Add Work Experience</button>
              <br>
              <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 4: Attachments -->
            <!-- Step 4: Attachments -->
            <div class="form-step" id="step4">
                <h4>Step 4: Attachments</h4>

                <div class="form-group">
                <label for="resume">Resume (CV):</label>
                <input type="file" name="cv" class="form-control-file" id="resume" required>
                <small class="form-text text-muted">Upload your updated resume in PDF or Word format.</small>
                </div>

                <div class="form-group">
                <label for="coverLetter">Cover Letter:</label>
                <input type="file" name="letters" class="form-control-file" id="coverLetter" required>
                <small class="form-text text-muted">Upload your cover letter in PDF or Word format.</small>
                </div>

                <div class="form-group">
                <label for="diploma">Diploma:</label>
                <input type="file" name="diploma" class="form-control-file" id="diploma" required>
                <small class="form-text text-muted">Upload your diploma or educational certificate.</small>
                </div>

                <div class="form-group">
                <label for="transcript">Transcript:</label>
                <input type="file" name="transcript" class="form-control-file" id="transcript" required>
                <small class="form-text text-muted">Upload your academic transcript.</small>
                </div>

                <div class="form-group">
                <label for="tazkira">National ID (Tazkira):</label>
                <input type="file" name="tazkira" class="form-control-file" id="tazkira" required>
                <small class="form-text text-muted">Upload a copy of your National ID (Tazkira).</small>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
                <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>


          </form>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('addButton').style.display = 'none';
    });

    function toggleButton() {
      const Yes_No = document.getElementById('Yes_No');
      const addButton = document.getElementById('addButton');
      addButton.style.display = Yes_No.value === 'Yes' ? 'block' : 'none';
    }

    let workExperienceCount = 0;

    function addWorkExperience() {
      workExperienceCount++;
      const container = document.getElementById('workExperienceContainer');
      const workExperienceHTML = `
        <div class="work-experience-item mb-3">
          <div class="form-group">
            <label>Job Title:</label>
            <input type="text" class="form-control" name="job_titles[]" placeholder="Enter job title">
          </div>
          <div class="form-group">
            <label>Company Name:</label>
            <input type="text" class="form-control" name="company_names[]" placeholder="Enter company name">
          </div>
          <div class="form-group">
            <label>Start Date:</label>
            <input type="date" class="form-control" name="start_dates[]">
          </div>
          <div class="form-group">
            <label>End Date:</label>
            <input type="date" class="form-control" name="end_dates[]">
          </div>
          <div class="form-group">
            <label>Job Description:</label>
            <textarea class="form-control" name="job_descriptions[]" rows="3" placeholder="Enter job description"></textarea>
          </div>
          <button type="button" class="btn btn-danger btn-sm" onclick="removeWorkExperience(this)">Remove</button>
        </div>
      `;
      const wrapper = document.createElement('div');
      wrapper.innerHTML = workExperienceHTML;
      container.appendChild(wrapper);
    }

    function removeWorkExperience(button) {
      button.closest('.work-experience-item').remove();
    }

    let currentStep = 1;

    function nextStep() {
      if (validateStep(currentStep)) {
        document.getElementById('step' + currentStep).classList.remove('active');
        currentStep++;
        const nextStep = document.getElementById('step' + currentStep);
        if (nextStep) {
          nextStep.classList.add('active');
        } else {
          currentStep = 1;
        }
      }
    }

    function prevStep() {
      document.getElementById('step' + currentStep).classList.remove('active');
      currentStep--;
      const prevStep = document.getElementById('step' + currentStep);
      if (prevStep) {
        prevStep.classList.add('active');
      } else {
        currentStep = 1;
      }
    }

    function validateStep(step) {
      let isValid = true;
      const inputs = document.getElementById('step' + step).querySelectorAll('input, select, textarea');
      inputs.forEach(input => {
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
