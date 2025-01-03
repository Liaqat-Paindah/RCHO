@extends('dashboard')
@section('content')

<body>
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="card-title">Update Password</h5>
                <p class="card-text">Ensure your account is using a long, random password to stay secure.</p>
            </div>
            <div class="card-body">
                <form action="/update-password" method="POST">
                    <!-- Current Password -->
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" id="current_password" name="current_password" class="form-control" placeholder="Enter current password" required>
                        <div class="text-danger small" id="current_password_error"></div>
                    </div>

                    <!-- New Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter new password" required>
                        <div class="text-danger small" id="password_error"></div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm new password" required>
                        <div class="text-danger small" id="password_confirmation_error"></div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
