<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ url('admin') }}/assets/images/logo.ico" />

    <!-- FontAwesome JS-->
    <script defer src="{{ url('admin') }}/assets/plugins/fontawesome/js/all.min.js"></script>
    {{-- {{ url('admin') }}/{{ url('admin') }}/assets/ --}}
    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ url('admin') }}/assets/css/portal.css">
    <title>RSP IZI SUMBAR</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">

</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="#"><img class="logo-icon me-2"
                                src="{{ url('admin') }}/assets/images/logo.ico" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-5">Log in to RSP IZI SUMBAR</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="email mb-3">
                                <label class="sr-only" for="email">Email Address</label>
                                <input id="email" name="email" type="email"
                                    class="form-control signin-email @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="Email Address" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="password mb-3">
                                <label class="sr-only" for="password">Password</label>
                                <input id="password" name="password" type="password"
                                    class="form-control signin-pasword @error('password') is-invalid @enderror"
                                    placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="forgot-password text-end"> <a
                                                href="{{ route('forgot-password') }}">
                                                {{ __('Lupa Password?') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-success w-100 theme-btn mx-auto">
                                    Log In
                                </button>
                            </div>
                        </form>
                        @if (Route::has('register'))
                            <div class="auth-option text-center pt-2">Belum punya akun? Registrasi<a class="text-link"
                                    href="{{ route('register') }}"> disini</a>.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="{{ url('admin') }}/assets/plugins/popper.min.js"></script>
    <script src="{{ url('admin') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="{{ url('admin') }}/assets/plugins/chart.js/chart.min.js"></script>
    <script src="{{ url('admin') }}/assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="{{ url('admin') }}/assets/js/app.js"></script>
</body>

</html>
