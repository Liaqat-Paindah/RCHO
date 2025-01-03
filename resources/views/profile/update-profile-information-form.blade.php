<div class="card">
    <div class="card-header">
        <h5 class="card-title">Profile Information</h5>
        <p class="card-text">Update your account's profile information and email address.</p>
    </div>
    <div class="card-body">
        <form id="updateProfileInformation">
            <!-- Profile Photo -->
            <div class="mb-4">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" id="photo" class="form-control d-none" onchange="previewPhoto(event)">

                <!-- Current Profile Photo -->
                <div id="currentPhoto" class="mt-2">
                    <img src="https://via.placeholder.com/150" alt="Current Profile Photo" class="rounded-circle" style="height: 80px; width: 80px; object-fit: cover;">
                </div>

                <!-- New Profile Photo Preview -->
                <div id="photoPreview" class="mt-2 d-none">
                    <div class="rounded-circle" style="height: 80px; width: 80px; background-size: cover; background-position: center;"></div>
                </div>

                <button type="button" class="btn btn-secondary mt-2" onclick="document.getElementById('photo').click()">Select A New Photo</button>
                <button type="button" class="btn btn-danger mt-2" id="removePhoto" style="display: none;">Remove Photo</button>
                <div id="photoError" class="text-danger mt-2" style="display: none;">Invalid photo.</div>
            </div>

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name">
                <div class="text-danger mt-1 d-none" id="nameError">Name is required.</div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Enter your email">
                <div class="text-danger mt-1 d-none" id="emailError">Invalid email address.</div>
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-between">
                <span id="actionMessage" class="text-success d-none">Saved.</span>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewPhoto(event) {
        const fileInput = event.target;
        const reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('currentPhoto').classList.add('d-none');
            const preview = document.getElementById('photoPreview');
            preview.style.backgroundImage = `url(${e.target.result})`;
            preview.classList.remove('d-none');
            document.getElementById('removePhoto').style.display = 'inline-block';
        };

        reader.readAsDataURL(fileInput.files[0]);
    }

    document.getElementById('removePhoto').addEventListener('click', function () {
        document.getElementById('currentPhoto').classList.remove('d-none');
        document.getElementById('photoPreview').classList.add('d-none');
        document.getElementById('photoPreview').style.backgroundImage = '';
        document.getElementById('removePhoto').style.display = 'none';
        document.getElementById('photo').value = '';
    });

    document.getElementById('updateProfileInformation').addEventListener('submit', function (e) {
        e.preventDefault();
        // Add form validation and save logic here
        document.getElementById('actionMessage').classList.remove('d-none');
    });
</script>
