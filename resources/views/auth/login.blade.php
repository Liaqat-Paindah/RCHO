@extends('master')
@section('content')
    <div class="container d-flex justify-content-center  pt-4" >
        <div class="card shadow-md col-sm-5" style=" border-radius: 6px;">
            <div class="card-body">
                <h3 class="text-center mb-2">Login</h3>
                <form method="POST" action="/login">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input id="email" type="email" placeholder="Ex: Liaqat@gmail.com" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus autocomplete="username" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input id="password" type="password" placeholder="Ex: **********" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" />
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
                        <label for="remember_me" class="form-check-label">Remember me</label>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn btn-info w-100 mb-1">
                        Log in
                    </button>

                    <!-- Forgot Password Link at the bottom -->
                    <div class="text-center">
                        <a href="{{ url('/forgot-password')  }}" class="text-muted text-sm">
                            Forgot your password?
                        </a>
                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-3">
                    <p class="mb-0">Don't have an account? <a href="/register" class="text-info">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
