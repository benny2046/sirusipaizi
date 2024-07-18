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
    <link id="theme-style" rel="stylesheet" href="{{ url('admin') }}/assets/css/portal.css" />
    <title>RSP IZI SUMBAR</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

</head>

<body class="app app-signup p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2"
                                src="{{ url('admin') }}/assets/images/logo.ico"></a></div>
                    <h2 class="auth-heading text-center mb-4">Sign up ro RSP IZI SUMBAR</h2>
                    <div class="auth-form-container taxt-start mx-auto">
                        <form class="auth-form auth-signup-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- rsp --}}
                            <div class="email mb-3">
                                <label for="rsp" class="sr-only">RSP</label>
                                <input id="rsp" type="hidden"
                                    class="form-control signup-name @error('rsp') is-invalid @enderror" name="rsp"
                                    value="Sumatera Barat" placeholder="Nama RSP" autocomplete="rsp">

                                @error('rsp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            {{-- name --}}
                            <div class="email mb-3">
                                <label for="name" class="sr-only">Name</label>

                                <input id="name" type="text"
                                    class="form-control signup-name @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="Name" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- phone --}}
                            <div class="email mb-3">
                                <label for="rsp" class="sr-only">No Handphone</label>
                                <input id="rsp" type="number"
                                    class="form-control signup-name @error('rsp') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" placeholder="Nomor Telepon" autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- email --}}
                            <div class="email mb-3">
                                <label for="email" class="sr-only">Email Address</label>
                                <input id="email" type="email"
                                    class="form-control signup-email @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email Address" value="{{ old('email') }}" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- role --}}
                            <input type="hidden" name="role" value="pengunjung">
                            {{-- password --}}
                            <div class="password mb-3">
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" type="password"
                                    class="form-control signup-password @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password" placeholder="Kata Sandi minimal 8 karakter">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- password --}}
                            <div class="password mb-3">
                                <label for="password-confirm" class="sr-only">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control signup-password"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Konfirmasi kata sandi">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-success w-100 theme-btn mx-auto">
                                    Register
                                </button>
                            </div>
                        </form>
                        @if (Route::has('login'))
                            <div class="auth-option text-center pt-2">Sudah mempunyai akun?<a class="text-link"
                                    href="{{ route('login') }}"> Log In</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div><!--//auth-background-overlay-->
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
