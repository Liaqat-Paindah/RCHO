@extends('master')

@section('content')
<div class="container d-flex justify-content-center  pt-4" >
        <div class="card shadow-md col-sm-5" style=" border-radius: 6px;">
            <div class="card-body">
                <h3 class="text-center mb-2">{{ __('Register') }}</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" name="name" placeholder="Ex: Liaqat Paindah" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required autofocus autocomplete="name" />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" type="email" name="email" placeholder="Ex: Liaqat@gmail.com" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autocomplete="username" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" placeholder="Ex: **********" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password" />
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" placeholder="Ex: **********" type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Register Button -->
                    <button type="submit" class="btn btn-info w-100 mb-3">
                        {{ __('Register') }}
                    </button>

                    <!-- Login Link at the bottom -->
                    <div class="text-center">
                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-info">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
