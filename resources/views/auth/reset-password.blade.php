<!DOCTYPE html>
<html lang="en">

<head>
    <title>RSP IZI ZUMBAR</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ url('admin') }}/assets/images/logo.ico" />

    <!-- FontAwesome JS-->
    <script defer src="{{ url('admin') }}/assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ url('admin') }}/assets/css/portal.css" />
</head>

<body class="app app-reset-password p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="{{ route('login') }}"><img
                                class="logo-icon me-2" src="{{ url('admin') }}/assets/images/logo.ico" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4">Password Reset</h2>

                    <div class="auth-intro mb-4 text-center">Silahkan Kata sandi yang baru</div>

                    <div class="auth-form-container text-left">

                        <form class="auth-form resetpass-form" method="POST" action="{{ route('reset-password') }}">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">
                            <div class="email mb-3">
                                <label class="sr-only" for="password">Kata Sandi Baru</label>
                                <input id="password" name="password" type="password" class="form-control login-email"
                                    placeholder="Kata Sandi Baru" required> <hr>
                                <label class="sr-only" for="password_confirmation">Confirm Kata sandi</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control login-email"
                                    placeholder="Confirm Kata Sandi Baru" required>
                                {{-- <label for="email">Email</label>
                                <input type="email" id="email" name="email" required> --}}
                            </div><!--//form-group-->
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-success btn-block theme-btn mx-auto">Ubah
                                    Password</button>
                            </div>
                        </form>
                    </div><!--//auth-form-container-->
                </div><!--//auth-body-->
            </div><!--//flex-column-->
        </div><!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->

    </div><!--//row-->


</body>

</html>
