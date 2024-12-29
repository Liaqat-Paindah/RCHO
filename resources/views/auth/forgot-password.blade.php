@extends('master')

@section('content')
    <div class="container d-flex justify-content-center pt-4" style="min-height: 60vh;">
        <div class="card shadow-md" style="width: 40%; border-radius: 6px;">
            <div class="card-body">
                <h3 class="text-center mb-2">{{ __('Forgot Your Password?') }}</h3>

                <div class="mb-4 text-sm text-muted">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus autocomplete="username" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-info w-100 mb-1">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-3">
                    <p class="mb-0">Remember your password? <a href="{{ route('login') }}" class="text-info">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
