@extends('layouts.main')

@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h1>Informasi Rumah Singgah Pasien</h1>
                <a type="button" class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="{{ route('login') }}">
                    Reservasi Rumah Singgah
                </a>

            </div>
            <div class="row g-12">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px"p>
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

                <div class="col-md-6 mt-4" data-aos="fade-right">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 card-title">
                                <strong>Fasilitas</strong>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p>Ruangan terdiri dari :</p>
                            <ul>
                                <li>4 kamar tidur</li>
                                <li>kamar mandi</li>
                                <li>dapur umum</li>
                                <li>Ruang tamu</li>
                                <li>1 garasi</li>
                            </ul>
                            <p>Sarana Prasarana :</p>
                            <ol>
                                <li>Kasur</li>
                                <li>Ambulance</li>
                                <li>Sofa tamu</li>
                                <li>Kulkas</li>
                                <li>TV</li>
                                <li>AC</li>
                                <li>Magic Com</li>
                                <li>Kompor</li>
                                <li>Peralatan makan (Piring, Sendok, Gelas)</li>
                                <li>Kipas Angin</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4" data-aos="fade-left">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 card-title">
                                <strong>Tata Tertib</strong>
                            </h5>
                        </div>
                        <div class="card-body">
                            <ol>
                                <li>RUMAH SINGGAH HANYA DIPERUNTUKKAN UNTUK MASYARAKAT YANG AKAN BEROBAT DI
                                    Padang.</li>
                                <li>WAJIB MELAPOR KEPADA PENGELOLA RUMAH SINGGAH SELAMBAT-LAMBATNYA H-1 SEBELUM MEMASUKI RUMAH
                                    SINGGAH DENGAN MENYERTAKAN FOTOKOPI KTP, KARTU KELUARGA DAN SURAT RUJUKAN DARI RUMAH SAKIT
                                    DI DAERAH.</li>
                                <li>PENDAMPING PASIEN MAKSIMAL 1 (SATU) ORANG.</li>
                                <li>BERKELAKUAN BAIK, MENJAGA KEBERSIHAN DAN KETERTIBAN, MEMBUANG SAMPAH PADA TEMPAT YANG TELAH
                                    DISEDIAKAN, SERTA SALING MENGHARGAI DENGAN SESAMA PENGHUNI DI RUMAH SINGGAH.</li>
                                <li>APABILA PROSES PENGOBATAN TELAH SELESAI DAN INGIN KEMBALI KE DAERAH ASAL, WAJIB SEGERA
                                    MELAPOR KEPADA PENGURUS RUMAH SINGGAH.</li>
                                <li>PASIEN WAJIB MENYERTAKAN SURAT KETERANGAN DOKTER YANG MENYATAKAN TIDAK MENDERITA PENYAKIT
                                    MENULAR.</li>
                                <li>DILARANG MEROKOK DI DALAM KAMAR DAN AREA RUMAH SINGGAH.</li>
                                <li>DILARANG MEMBAWA ATAU MENYIMPAN BARANG MILIK DAERAH ATAU ASET MILIK PROVINSI YANG ADA PADA RUMAH SINGGAH DI PADANG.
                                </li>
                                <li>APABILA PASIEN DAN/ATAU PENDAMPING MELANGGAR ATURAN RUMAH SINGGAH, YANG BERSANGKUTAN
                                    BERSEDIA UNTUK DIKELUARKAN DARI RUMAH SINGGAH TANPA ALASAN APAPUN.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
