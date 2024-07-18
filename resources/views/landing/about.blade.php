@extends('layouts.main')

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ url('landingpage') }}/img/rspizisumbar.jpg"
                            alt="" />
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ url('landingpage') }}/img/lazna.jpg"
                            alt="" style="margin-top: -25%" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
                    <h1 class="mb-4">Rumah Singgah Pasien IZI di Sumatera Barat</h1>
                    <p>
                        Rumah Singgah Pasien IZI merupakan pelayanan tempat tinggal bagi pasien fakir, miskin, dan dhuafa,
                        yang sedang menjalani pengobatan di rumah sakit rujukan yang berada di kota besar dan tidak memiliki
                        biaya untuk menyewa tempat tinggal selama menjalani pengobatan penyakitnya di rumah sakit rujukan
                        yang biasanya memakan waktu 6 bulan bahkan sampai ada yang 2 tahun.
                    </p>
                    <p class="mb-4">
                        Rumah Singgah Pasiengo IZI menyediakan kasur, lemari, makan pokok sehari-hari, pembinaan rohani dan
                        pengantaran pasien menggunakan mobil baik dari rumah sakit ke rumah singgah pasien, maupun dari
                        rumah singgah pasien ke bandara atau terminal saat pasien sudah sembuh dan kembali ke kampung
                        halamannya.

                        Rumah Singgah Pasien tidak pernah membatasi waktu pasien untuk tinggal selama secara medis memang
                        masih perlu menjalani proses pengobatan di rumah sakit rujukan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
