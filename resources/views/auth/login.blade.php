<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | {{ env('APP_NAME') }}</title>
    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('frontend_assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="{{ route('login') }}" method="POST" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title">
                            <img src="{{ asset('backend_assets/media/logos/logo.png') }}" alt="logo">
                        </h2>
                        <div class="form-group">
                            <input id="email" type="email"
                                class="form-input form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Your Email" />

                            @error('email')
                                <small class="invalid-feedback" role="alert">
                                    <em style="color:red">{{ $message }}</em>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- <input type="text" class="form-input" name="password" id="password" placeholder="Password"/> --}}
                            <input id="password" type="password"
                                class="form-input form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password" placeholder="Password" />

                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="agree-term" class="agree-term"
                                {{ old('remember') ? 'checked' : '' }} />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Remeber
                                Me</a></label>
                            <input class="agree-term form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Create a new Account ? <a href="{{ route('register') }}" class="loginhere-link">Sign Up
                            here</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="{{ asset('frontend_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
</body>

</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
