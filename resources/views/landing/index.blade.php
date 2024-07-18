@extends('layouts.main')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-success p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-5 text-white">Rumah Singgah Pasien</h1>
                <h1 class="display-5 text-white mb-5">IZI Sumbar</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">{{ $totalKamar }}</h2>
                            <p class="text-light mb-0">Total Kamar yang Tersedia</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">{{ $jumlahPasien }}</h2>
                            <p class="text-light mb-0">Jumlah Pasien</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ url('landingpage') }}/img/rspizisumbar.jpg" alt="" />
                        <div class="owl-carousel-text">
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ url('landingpage') }}/img/lazna.jpg" alt="" />
                        <div class="owl-carousel-text">
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ url('landingpage') }}/img/logo.png" alt="" />
                        <div class="owl-carousel-text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end"
                            src="{{ url('landingpage') }}/img/rspizisumbar.jpg" alt="" />
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ url('landingpage') }}/img/lazna.jpg"
                            alt="" style="margin-top: -25%" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
                    <h1 class="mb-4">Rumah Singgah Pasien IZI di Sumatera Barat</h1>
                    <p>
                        Rumah Singgah Pasien IZI merupakan pelayanan tempat tinggal bagi pasien fakir, miskin, dan
                        dhuafa, yang sedang menjalani pengobatan di rumah sakit rujukan yang berada di kota besar dan
                        tidak memiliki biaya untuk menyewa tempat tinggal selama menjalani pengobatan penyakitnya di
                        rumah sakit rujukan yang biasanya memakan waktu 6 bulan bahkan sampai ada yang 2 tahun.
                    </p>
                    <p class="mb-4">
                        Rumah Singgah Pasiengo IZI menyediakan kasur, lemari, makan pokok sehari-hari, pembinaan rohani
                        dan pengantaran pasien menggunakan mobil baik dari rumah sakit ke rumah singgah pasien, maupun
                        dari rumah singgah pasien ke bandara atau terminal saat pasien sudah sembuh dan kembali ke
                        kampung halamannya.

                        Rumah Singgah Pasien tidak pernah membatasi waktu pasien untuk tinggal selama secara medis
                        memang masih perlu menjalani proses pengobatan di rumah sakit rujukan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h1>Informasi Rumah Singgah Pasien</h1>
                <a type="button" class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="login">
                    Reservasi
                </a>

            </div>
            <div class="row g-12">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px">
                            <svg height="64" id="svg3162" version="1.1" viewBox="0 0 16.933333 16.933334"
                                width="64" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                xmlns:svg="http://www.w3.org/2000/svg">
                                <defs id="defs3156" />
                                <g id="layer1" transform="translate(0,-280.06665)">
                                    <path
                                        d="m 6.0854123,281.91873 c -0.146169,5.3e-4 -0.2651442,0.11842 -0.2645833,0.26459 v 4.11292 c -0.2814505,-0.25307 -0.6520339,-0.40876 -1.0583334,-0.40876 -0.8736198,0 -1.5875,0.71388 -1.5875,1.5875 0,0.55098 0.2842445,1.03803 0.7131341,1.32292 H 2.6458289 v -3.96875 c 0,-0.43515 -0.3586004,-0.79375 -0.79375,-0.79375 -0.4351496,0 -0.79375,0.3586 -0.79375,0.79375 v 4.7625 c 0,0.43515 0.3586109,0.79375 0.79375,0.79375 h 0.5291667 0.5302012 l -0.00103,4.49792 c 2.11e-5,0.14551 0.1190625,0.26458 0.2645833,0.26458 H 4.233329 c 0.1461796,-5.3e-4 0.2651522,-0.11841 0.2645833,-0.26458 v -1.85209 h 7.9375007 v 1.85209 c -5.3e-4,0.14693 0.117644,0.26514 0.264583,0.26458 h 1.058333 c 0.14618,-5.3e-4 0.265144,-0.11841 0.264584,-0.26458 v -4.49792 h 1.5875 c 0.145399,-5.3e-4 0.264072,-0.11917 0.264583,-0.26458 v -1.05834 c -5.29e-4,-0.1454 -0.119184,-0.26406 -0.264583,-0.26458 h -0.79375 v -1.05833 c 0,-0.28972 -0.174144,-0.53643 -0.411346,-0.72399 -0.237198,-0.18755 -0.551748,-0.33705 -0.929658,-0.46302 -0.755819,-0.25193 -1.769319,-0.40049 -2.89233,-0.40049 H 9.5249958 c -1.1230108,0 -2.1370264,0.14856 -2.8928458,0.40049 -0.0987,0.0329 -0.1926749,0.0677 -0.2821543,0.10438 v -4.20904 h 1.3229167 v 0.52917 c -0.4351497,0 -0.79375,0.35859 -0.79375,0.79375 v 1.05833 c 0,0.43516 0.3585792,0.79375 0.79375,0.79375 h 0.5291667 c 0.4351708,0 0.79375,-0.3586 0.79375,-0.79375 v -1.05833 c 0,-0.43516 -0.3585898,-0.79375 -0.79375,-0.79375 v -0.79375 c 5.291e-4,-0.14694 -0.1176523,-0.26515 -0.2645834,-0.26459 z m 1.5875001,1.5875 h 0.5291667 c 0.1511697,0 0.2645833,0.11343 0.2645833,0.26459 v 1.05833 c 0,0.15115 -0.1134242,0.26458 -0.2645833,0.26458 H 7.6729124 c -0.1511591,0 -0.2645834,-0.11343 -0.2645834,-0.26458 v -1.05833 c 0,-0.15116 0.1134243,-0.26459 0.2645834,-0.26459 z m -2.9104168,2.91042 c 0.5876291,0 1.058344,0.47071 1.0583334,1.05833 0,0.58763 -0.4707043,1.05834 -1.0583334,1.05834 -0.587629,0 -1.0583333,-0.47071 -1.0583333,-1.05834 0,-0.58763 0.4706937,-1.05834 1.0583333,-1.05833 z m -2.1166667,2.91042 H 15.345829 v 0.52916 H 2.6458289 Z m 1.8520834,1.05833 h 1.5875 v 1.5875 h -1.5875 z m 2.1166667,0 h 1.5875001 v 1.5875 H 6.614579 Z m 2.1166667,0 h 1.5875003 v 1.5875 H 8.7312457 Z m 2.1166663,0 h 1.587501 v 1.5875 h -1.587501 z"
                                        id="path2758"
                                        style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.5291667;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                                    <path
                                        d="m 2.3812,291.17917 a 0.26458335,0.26458335 0 0 1 -0.26458,0.26458 0.26458335,0.26458335 0 0 1 -0.26458,-0.26458 0.26458335,0.26458335 0 0 1 0.26458,-0.26458 0.26458335,0.26458335 0 0 1 0.26458,0.26458 z"
                                        id="path2181"
                                        style="display:inline;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.52916676;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                                    <path
                                        d="m 15.0812,291.17917 a 0.26458335,0.26458335 0 0 1 -0.26458,0.26458 0.26458335,0.26458335 0 0 1 -0.26459,-0.26458 0.26458335,0.26458335 0 0 1 0.26459,-0.26458 0.26458335,0.26458335 0 0 1 0.26458,0.26458 z"
                                        id="path2183"
                                        style="display:inline;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.52916676;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                                    <path
                                        d="m 11.9062,293.82499 a 0.26458335,0.26458335 0 0 1 -0.26459,0.26458 0.26458335,0.26458335 0 0 1 -0.26458,-0.26458 0.26458335,0.26458335 0 0 1 0.26458,-0.26459 0.26458335,0.26458335 0 0 1 0.26459,0.26459 z"
                                        id="path2185"
                                        style="display:inline;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.52916676;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                                    <path
                                        d="m 5.55621,293.82499 a 0.26458335,0.26458335 0 0 1 -0.26459,0.26458 0.26458335,0.26458335 0 0 1 -0.26458,-0.26458 0.26458335,0.26458335 0 0 1 0.26458,-0.26459 0.26458335,0.26458335 0 0 1 0.26459,0.26459 z"
                                        id="path2187"
                                        style="display:inline;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.52916676;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                                </g>
                            </svg>
                        </div>
                        <h4 class="mb-3">Kamar Kosong</h4>
                        <p class="mb-4">
                        <h2 class="text-black mb-1" data-toggle="counter-up">{{ $totalKamar }}</h2>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px">
                            <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <g data-name="Crowd Patient" id="Crowd_Patient">
                                    <path
                                        d="M28.35,38.12a6,6,0,0,1-8.7,0A9,9,0,0,0,15,46v1H33a10.25,10.25,0,0,0-.52-4A9,9,0,0,0,28.35,38.12Z" />
                                    <path
                                        d="M24.29,30.29a2.93,2.93,0,0,1,3.46-.66,4,4,0,0,0-7.62.38C20.26,30,23.31,31.28,24.29,30.29Z" />
                                    <path
                                        d="M20,34a4,4,0,0,0,8,0c0-3.08.11-1.47-.71-2.29a1,1,0,0,0-1.58,0c-1.4,1.38-3.86,1.06-5.71.36Z" />
                                    <path
                                        d="M17.55,37.1a9.16,9.16,0,0,0-3.2-3,6,6,0,0,1-8.7,0A9,9,0,0,0,1,42v1H13.42A10.94,10.94,0,0,1,17.55,37.1Z" />
                                    <path
                                        d="M10.29,26.29a2.93,2.93,0,0,1,3.46-.66A4,4,0,0,0,6.13,26C6.26,26,9.31,27.28,10.29,26.29Z" />
                                    <path
                                        d="M14,30c0-3.08.11-1.47-.71-2.29a1,1,0,0,0-1.58,0c-1.4,1.38-3.86,1.06-5.71.36,0,2-.22,3.35,1.17,4.76A4,4,0,0,0,14,30Z" />
                                    <path
                                        d="M44.36,35.64a8.79,8.79,0,0,0-2-1.52,6,6,0,0,1-8.7,0,9,9,0,0,0-3.2,3A11,11,0,0,1,34.58,43H47C47,40.19,46.61,37.87,44.36,35.64Z" />
                                    <path
                                        d="M38.29,26.29a2.93,2.93,0,0,1,3.46-.66,4,4,0,0,0-7.62.38C34.26,26,37.31,27.28,38.29,26.29Z" />
                                    <path
                                        d="M39.71,27.71c-1.4,1.38-3.86,1.06-5.71.36,0,2-.22,3.35,1.17,4.76A4,4,0,0,0,42,30c0-3.08.11-1.47-.71-2.29A1,1,0,0,0,39.71,27.71Z" />
                                    <path d="M24,21A10,10,0,1,0,14,11,10,10,0,0,0,24,21ZM19,9h3V6h4V9h3v4H26v3H22V13H19Z" />
                                </g>
                            </svg>
                        </div>
                        <h4 class="mb-3">Jumlah Pasien yang Menginap</h4>
                        <p class="mb-4">
                        <h2 class="text-black mb-1" data-toggle="counter-up">{{ $jumlahPasien }}</h2>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- grafik --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-6 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
                <h1>Laporan Pengunjung</h1>
                <h1>Rumah Singgah Pasien IZI Sumbar</h1>
            </div>
            <div class="text-center mx-auto wow fadeInUp">
                <div class="row g-12">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <h4 class="mb-3">Jenis Kelamin</h4>
                            <form id="filterForm1" method="GET" action="{{ route('landing.index2') }}">

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="start_date1">Start Date:</label>
                                        <input type="date" id="start_date1" name="start_date1"
                                            value="{{ $startDate1 }}">
                                    </div>
                                    <div class="col">
                                        <label for="end_date1">End Date:</label>
                                        <input type="date" id="end_date1" name="end_date1"
                                            value="{{ $endDate1 }}">
                                    </div>
                                    <div class="col-auto align-self-end">
                                        <button type="button" onclick="filterData(1)">Filter</button>

                                        <button type="button" onclick="resetFilter(1)">Reset</button>
                                    </div>
                                </div>
                            </form>
                            <canvas id="jenisKelaminChart" width="50" height="50"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <h4 class="mb3">Daerah Asal</h4>
                            <form id="filterForm2" method="GET" action="{{ route('landing.index2') }}">

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="start_date2">Start Date:</label>
                                        <input type="date" id="start_date2" name="start_date2"
                                            value="{{ $startDate2 }}">
                                    </div>
                                    <div class="col">
                                        <label for="end_date2">End Date:</label>
                                        <input type="date" id="end_date2" name="end_date2"
                                            value="{{ $endDate2 }}">
                                    </div>
                                    <div class="col-auto align-self-end">
                                        <button type="button" onclick="filterData(2)">Filter</button>

                                        <button type="button" onclick="resetFilter(2)">Reset</button>
                                    </div>
                                </div>
                            </form>
                            <canvas id="daerahPasienChart" width="50" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-12">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <h4 class="mb-3">Jumlah Sahabat yang Menerima Manfaat</h4>
                            <form id="filterForm3" method="GET" action="{{ route('landing.index2') }}">

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="start_date3">Start Date:</label>
                                        <input type="date" id="start_date3" name="start_date3"
                                            value="{{ $startDate3 }}">
                                    </div>
                                    <div class="col">
                                        <label for="end_date3">End Date:</label>
                                        <input type="date" id="end_date3" name="end_date3"
                                            value="{{ $endDate3 }}">
                                    </div>
                                    <div class="col-auto align-self-end">
                                        <button type="button" onclick="filterData(3)">Filter</button>

                                        <button type="button" onclick="resetFilter(3)">Reset</button>
                                    </div>
                                </div>
                            </form>
                            <canvas id="rumahSinggahPasienChart" width="50" height="30"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <h4 class="mb-3">Penyakit</h4>
                            <form id="filterForm4" method="GET" action="{{ route('landing.index2') }}">

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="start_date4">Start Date:</label>
                                        <input type="date" id="start_date4" name="start_date4"
                                            value="{{ $startDate4 }}">
                                    </div>
                                    <div class="col">
                                        <label for="end_date4">End Date:</label>
                                        <input type="date" id="end_date4" name="end_date4"
                                            value="{{ $endDate4 }}">
                                    </div>
                                    <div class="col-auto align-self-end">
                                        <button type="button" onclick="filterData(4)">Filter</button>

                                        <button type="button" onclick="resetFilter(4)">Reset</button>
                                    </div>
                                </div>
                            </form>
                            <canvas id="kategoriPenyakitBulananChart" width="50" height="50"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">
                            Sahabat RSP
                        </p>
                        <h1 class="text-white mb-4">Sahabat yang menginap di RSP</h1>
                        <form>
                            <div class="row g-4">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">No</th>
                                            <th class="cell">Nama Sahabat</th>
                                            <th class="cell">Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($pasiens as $data)
                                            <tr>
                                                <td class="cell">{{ $no++ }}</td>
                                                <td class="cell">{{ $data->nama }}</td>
                                                <td class="cell">{{ $data->alamat }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 200px">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                            src="{{ url('landingpage') }}/img/feature.jpg" style="object-fit: cover" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- donasi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <div class="col-12">
                    <a type="button" class="btn btn-primary rounded-pill py-3 px-5 mt-3"
                        href="{{ route('landing.donasii') }}">
                        <h1 class="display-5 text-white">Donasi</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- donasi End -->
    <!-- modal donasi -->
    {{-- <div class="modal fade" id="donasiModal" tabindex="-1" role="dialog" aria-labelledby="donasiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <!-- Isi modal di sini -->
                <div class="modal-header">
                    <h5 class="modal-title" id="donasiModalLabel">Form Donasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="{{ route('landing.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama">

                                        <!-- error message untuk nama -->
                                        @error('nama')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">No Telepon</label>
                                        <input type="number" class="form-control @error('no_hp') is-invalid @enderror"
                                            name="no_hp" value="{{ old('no_hp') }}"
                                            placeholder="Masukkan no telepon">

                                        <!-- error message untuk no_hp -->
                                        @error('no_hp')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jumlah</label>
                                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror"
                                            name="jumlah" value="{{ old('jumlah') }}"
                                            placeholder="Masukkan jumlah donasi">

                                        <!-- error message untuk jumlah -->
                                        @error('jumlah')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Bukti</label>
                                        <input type="file" class="form-control @error('bukti') is-invalid @enderror"
                                            name="bukti">

                                        <!-- error message untuk title -->
                                        @error('bukti')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <script>
        var filters = {
            start_date1: "{{ $startDate1 }}",
            end_date1: "{{ $endDate1 }}",
            start_date2: "{{ $startDate2 }}",
            end_date2: "{{ $endDate2 }}",
            start_date3: "{{ $startDate3 }}",
            end_date3: "{{ $endDate3 }}",
            start_date4: "{{ $startDate4 }}",
            end_date4: "{{ $endDate4 }}",
        };

        function filterData(filterNumber) {
            var formId = '#filterForm' + filterNumber;
            var formData = $(formId).serializeArray();

            formData.forEach(function(item) {
                filters[item.name] = item.value;
            });

            $.ajax({
                url: '{{ route('landing.index2') }}',
                method: 'GET',
                data: filters,
                success: function(response) {
                    updateCharts(response);
                },
                error: function() {
                    alert('Failed to fetch data.');
                }
            });
        }

        function resetFilter(filterNumber) {
            var formId = '#filterForm' + filterNumber;
            $(formId)[0].reset();

            $(formId).serializeArray().forEach(function(item) {
                filters[item.name] = '';
            });

            $.ajax({
                url: '{{ route('landing.index2') }}',
                method: 'GET',
                data: filters,
                success: function(response) {
                    updateCharts(response);
                },
                error: function() {
                    alert('Failed to fetch data.');
                }
            });
        }

        function updateCharts(data) {
            jenisKelaminChart.data.datasets[0].data = data.jenisKelamin;
            jenisKelaminChart.data.labels = data.jenisKelamink;
            jenisKelaminChart.update();

            daerahPasienChart.data.datasets[0].data = Object.values(data.jkabupaten);
            daerahPasienChart.data.labels = Object.keys(data.jkabupaten);
            daerahPasienChart.update();

            rumahSinggahPasienChart.data.datasets[0].data = data.jPenerima;
            rumahSinggahPasienChart.data.labels = data.jPenerimak;
            rumahSinggahPasienChart.update();

            kategoriPenyakitBulananChart.data.datasets[0].data = Object.values(data.jPenyakit);
            kategoriPenyakitBulananChart.data.labels = data.jPenyakitk;
            kategoriPenyakitBulananChart.update();
        }

        var ctx1 = document.getElementById("jenisKelaminChart").getContext("2d");
        var jenisKelaminChart = new Chart(ctx1, {
            type: "pie",
            data: {
                labels: @json($jenisKelamink),
                datasets: [{
                    label: "Jenis Kelamin",
                    data: @json($jenisKelamin),
                    backgroundColor: [
                        'rgba(220,48,48)',
                        'rgba(61,133,198)'
                    ],
                }],
            },
            options: {
                title: {
                    display: true,
                    text: "Distribusi Jenis Kelamin",
                },
            },
        });

        var ctx2 = document.getElementById('daerahPasienChart').getContext('2d');
        var daerahPasienChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: @json($jkabupaten->keys()),
                datasets: [{
                    label: 'Jumlah Pasien',
                    data: @json($jkabupaten->values()),
                    backgroundColor: [
                        'rgba(204,0,0)',
                        'rgba(230,145,56)',
                        'rgba((241,194,50)',
                        'rgba(106,168,79)',
                        'rgba(69,129,142)',
                        'rgba(61,133,198)',
                        'rgba(103,78,167)',
                        'rgba(166,77,121)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(68,233,74)',
                        'rgba(169,239,138)',
                        'rgba(169,239,138)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                title: {
                    display: true,
                    text: 'Distribusi Pasien Berdasarkan Daerah'
                }
            }
        });

        var ctx3 = document.getElementById('rumahSinggahPasienChart').getContext('2d');
        var rumahSinggahPasienChart = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: @json($jPenerimak),
                datasets: [{
                    label: 'Jumlah Pasien',
                    data: @json($jPenerima),
                    fill: false,
                    borderColor: 'rgba(68,233,74)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                title: {
                    display: true,
                    text: 'Jumlah Pasien di Rumah Singgah Pasien per Bulan'
                }
            }
        });

        var ctx4 = document.getElementById('kategoriPenyakitBulananChart').getContext('2d');
        var kategoriPenyakitBulananChart = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: @json($jPenyakitk),
                datasets: [{
                    label: 'Jumlah Penyakit',
                    data: @json($jPenyakit),
                    backgroundColor: [
                        'rgba(204,0,0)',
                        'rgba(230,145,56)',
                        'rgba((241,194,50)',
                        'rgba(106,168,79)',
                        'rgba(69,129,142)',
                        'rgba(61,133,198)',
                        'rgba(103,78,167)',
                        'rgba(166,77,121)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(68,233,74)',
                        'rgba(169,239,138)',
                        'rgba(169,239,138)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                title: {
                    display: true,
                    text: 'Jumlah Penyakit'
                }
            }
        });
    </script>
@endsection
