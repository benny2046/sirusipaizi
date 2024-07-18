<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>RSP IZI SUMBAR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ url('landingpage') }}/img/logo.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ url('landingpage') }}/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{ url('landingpage') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ url('landingpage') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('landingpage') }}/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Template Stylesheet -->
    <link href="{{ url('landingpage') }}/css/style.css" rel="stylesheet" />

    <style>
        /* CSS untuk mengatur tampilan tabel */
        .table {
            background-color: white;
            color: black;
            border-collapse: collapse;
            width: 100%;
            border-radius: 10px;
            /* Membulatkan sudut tabel */
            overflow: hidden;
            /* Memastikan agar border-radius bekerja */
        }

        /* CSS untuk mengatur warna teks pada sel-sel tabel */
        .table td,
        .table th {
            color: black;
            border: 1px solid black;
            padding: 12px;
            text-align: center;
        }

        /* CSS untuk mengatur warna latar belakang baris ganjil */
        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        /* CSS untuk mengatur hover pada baris */
        .table tbody tr:hover {
            background-color: #e0e0e0;
        }

        /* CSS untuk mengatur header tabel */
        .table thead th {
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Padang, Sumatera Barat, Indonesia</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Jum'at : 09.00 AM - 17.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c vc_btn3-icon-left btn"
                        href="https://wa.me/6281371008814" target="_blank"><i class="fa fa-phone-alt"></i>
                        <small>081371008814</small></a>

                    {{-- <a href="https://wa.me/6281371008814" target="_blank">
                        <small class="fa fa-phone-alt me-2"></small>
                        <small>081371008814</small>
                    </a> --}}
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a target="_blank" class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                        href="https://www.facebook.com/InisiatifZakatID"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                        href="https://twitter.com/inisiatifzakat"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                        href="https://www.youtube.com/channel/UC3KGwC1O1DgCbySUh6mCrWA"><i
                            class="fab fa-youtube"></i></a>
                    <a target="_blank" class="btn btn-sm-square rounded-circle bg-white text-primary me-0"
                        href="https://www.instagram.com/izisumbar/"><i class="fab fa-instagram"></i></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <!-- <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1> -->
            <h1 class="m-0 text-primary"><img src="{{ url('landingpage') }}/img/logoizii.png" /></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Beranda</a>
                <a href="/tentang-kami" class="nav-item nav-link">Tentang Kami</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ route('landing.reservasi') }}" class="dropdown-item">Pendaftaran</a>
                        <a href="{{ route('landing.donasii') }}" class="dropdown-item">Donasi</a>
                    </div>
                </div>

                {{-- <a href="/tentang-kami" class="nav-item nav-link">Tentang Kami</a> --}}
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Reservasi<i
                    class="fa fa-arrow-right ms-#"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-3">Kantor Cabang IZI Sumatera Barat</h4>
                    <h5 class="text-light mb-2">Alamat </h5>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>Kec. Nanggalo, Kota Padang, Sumatera Barat
                    </p>

                    <a class="mb-2" href="https://wa.me/6281371008814" target="_blank"></a>
                    <i class="fa fa-phone-alt me-3"></i>0813-7100-8814</a>

                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>izi@test.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" target="_blank"
                            href="https://www.instagram.com/izisumbar/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">SIRUSIP</a>, All
                        Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By
                        <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/wow/wow.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/easing/easing.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ url('landingpage') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    <!-- JavaScript Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- Template Javascript -->
    <script src="{{ url('landingpage') }}/js/main.js"></script>
</body>

</html>
