@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Reservasi</div>

                    <div class="card-body">
                        <p><strong>Nama:</strong> {{ $reservasi['nama'] }}</p>
                        <p><strong>Phone:</strong> {{ $reservasi['phone'] }}</p>
                        <p><strong>Alamat:</strong> {{ $reservasi['alamat'] }}</p>
                        <p><strong>Kelurahan:</strong> {{ $reservasi['kelurahan'] }}</p>
                        <p><strong>Kecamatan:</strong> {{ $reservasi['kecamatan'] }}</p>
                        <p><strong>Kabupaten:</strong> {{ $reservasi['kabupaten'] }}</p>
                        <p><strong>Provinsi:</strong> {{ $reservasi['provinsi'] }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $reservasi['jeniskelamin'] }}</p>
                        <p><strong>Umur:</strong> {{ $reservasi['umur'] }}</p>
                        <p><strong>Pendidikan:</strong> {{ $reservasi['pendidikan'] }}</p>
                        <p><strong>Pekerjaan:</strong> {{ $reservasi['pekerjaan'] }}</p>
                        <p><strong>Jenis Penyakit:</strong> {{ $reservasi['jenis_penyakit'] }}</p>
                        <p><strong>Kategori Penyakit:</strong> {{ $reservasi['kategori_penyakit'] }}</p>
                        <p><strong>Tanggal Masuk:</strong> {{ $reservasi['tanggal_masuk'] }}</p>
                        <p><strong>Nama Pendamping:</strong> {{ $reservasi['nama_pendamping'] }}</p>
                        <p><strong>Umur Pendamping:</strong> {{ $reservasi['umur_pendamping'] }}</p>
                        <p><strong>Pendidikan Pendamping:</strong> {{ $reservasi['pendidikan_pendamping'] }}</p>
                        <p><strong>Pekerjaan Pendamping:</strong> {{ $reservasi['pekerjaan_pendamping'] }}</p>
                        <p><strong>Jenis Kelamin Pendamping:</strong> {{ $reservasi['jeniskelaminpendamping'] }}</p>
                        <p><strong>Phone Pendamping:</strong> {{ $reservasi['phone_pendamping'] }}</p>
                        <p><strong>Provinsi Pendamping:</strong> {{ $reservasi['provinsi_pendamping'] }}</p>
                        <p><strong>Tanggal Masuk Pendamping:</strong> {{ $reservasi['tanggal_masuk_pendamping'] }}</p>
                        <p><strong>File:</strong>
                        @if($reservasi['file'])
                            @if(pathinfo($reservasi['file'], PATHINFO_EXTENSION) === 'pdf')
                                <!-- Menampilkan ikon PDF -->
                                <a href="{{ asset('storage/reservasi/' . $reservasi['file']) }}" target="_blank">
                                    <img src="{{ url('admin') }}/assets/images/pdf.png" alt="PDF Icon" width="20" height="20">
                                    <!-- Ganti 'nama_folder' dengan nama folder tempat Anda menyimpan file -->
                                </a>
                            @else
                                <!-- Jika bukan file PDF, tampilkan nama file -->
                                <p><strong>File:</strong> <a href="{{ asset('storage/reservasi/' . $reservasi['file']) }}" target="_blank">{{ $reservasi['file'] }}</a></p>
                            @endif
                        @else
                            <p><strong>File:</strong> Tidak ada file terlampir</p>
                        @endif
                    </p>
                        <p><strong>Status:</strong> {{ $reservasi['status'] }}</p>
                        <p><strong>User ID:</strong> {{ $reservasi->user['name'] }}</p>

                        <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
