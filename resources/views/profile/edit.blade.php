@extends('dashboard')
@section('content')

        <!-- Content -->
        <div class="row g-4">
            <!-- Update Profile Information -->
            <div class="col-12">
                <div class="p-4 bg-white shadow-sm rounded">
                    <div class="max-w-md">
                        <!-- Placeholder for Update Profile Information Form -->
                        <h5 class="mb-3">Update Profile Information</h5>
                        <form>
                            <!-- Add form fields for profile information here -->
                            <div class="mb-3">
                                <label for="profileName" class="form-label">Name</label>
                                <input type="text" id="profileName" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="profileEmail" class="form-label">Email</label>
                                <input type="email" id="profileEmail" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Update Password -->
            <div class="col-12">
                <div class="p-4 bg-white shadow-sm rounded">
                    <div class="max-w-md">
                        <!-- Placeholder for Update Password Form -->
                        <h5 class="mb-3">Update Password</h5>
                        <form>
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" id="currentPassword" class="form-control" placeholder="Enter current password">
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" id="newPassword" class="form-control" placeholder="Enter new password">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm new password">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete User -->
            <div class="col-12">
                <div class="p-4 bg-white shadow-sm rounded">
                    <div class="max-w-md">
                        <!-- Placeholder for Delete User Form -->
                        <h5 class="mb-3">Delete Account</h5>
                        <form>
                            <p class="text-danger">Deleting your account is irreversible. Proceed with caution.</p>
                            <button type="submit" class="btn btn-danger">Delete Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
