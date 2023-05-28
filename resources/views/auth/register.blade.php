<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up |{{ env('APP_NAME') }}</title>
    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('frontend_assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
</head>

<body>
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="{{ route('register') }}" method="POST" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title">
                            <img src="{{ asset('backend_assets/media/logos/logo.png') }}" alt="logo">
                        </h2>
                        <div class="form-group">
                            <input id="name" type="text"
                                class="form-input form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Your Name" />

                            @error('name')
                                <small class="invalid-feedback text-danger">
                                    <em style="color: red">{{ $message }}</em>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="email" type="email"
                                class="form-input form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" autocomplete="email" placeholder="Your Email" />

                            @error('email')
                                <small class="invalid-feedback text-danger">
                                    <em style="color: red">{{ $message }}</em>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                class="form-input form-control @error('password') is-invalid @enderror" name="password"
                                autocomplete="new-password" placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>

                            @error('password')
                                <small class="invalid-feedback text-danger">
                                    <em style="color: red">{{ $message }}</em>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-input form-control"
                                name="password_confirmation" autocomplete="new-password"
                                placeholder="Repeat your password" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="{{ route('login') }}" class="loginhere-link">Login here</a>
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
