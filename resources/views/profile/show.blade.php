@extends('dashboard')
@section('content')

<body>
    <div class="container py-5">
        <!-- Header -->
        <header class="mb-4">
            <h2 class="fw-semibold fs-4 text-dark">
                Profile
            </h2>
        </header>

        <!-- Content -->
        <div class="max-w-7xl mx-auto py-4">
            <!-- Update Profile Information -->
            <section class="mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-body">
                        <h5 class="card-title">Update Profile Information</h5>
                        <!-- Placeholder for Profile Information Update -->
                        <form>
                            <!-- Add form fields for profile information here -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Update Password -->
            <section class="mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-body">
                        <h5 class="card-title">Update Password</h5>
                        <!-- Placeholder for Password Update -->
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
            </section>

            <!-- Two-Factor Authentication -->
            <section class="mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-body">
                        <h5 class="card-title">Two-Factor Authentication</h5>
                        <!-- Placeholder for Two-Factor Authentication -->
                        <p>Manage your two-factor authentication settings here.</p>
                        <button type="button" class="btn btn-primary">Enable/Disable 2FA</button>
                    </div>
                </div>
            </section>

            <!-- Logout Other Browser Sessions -->
            <section class="mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-body">
                        <h5 class="card-title">Logout Other Browser Sessions</h5>
                        <!-- Placeholder for Logout Other Sessions -->
                        <p>Log out from all other active sessions on other devices.</p>
                        <button type="button" class="btn btn-warning">Logout Other Sessions</button>
                    </div>
                </div>
            </section>

            <!-- Delete Account -->
            <section class="mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Delete Account</h5>
                        <!-- Placeholder for Delete Account -->
                        <p class="text-danger">Deleting your account is irreversible. Proceed with caution.</p>
                        <button type="button" class="btn btn-danger">Delete Account</button>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @endsection

