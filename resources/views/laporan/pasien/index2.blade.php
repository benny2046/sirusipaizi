@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $listtitle }}</h1>

        <form action="/laporanpasien" method="GET" class="mb-4">
            <div class="form-row">
                <div class="col">
                    <input type="date" name="awal" class="form-control" placeholder="Tanggal Awal"
                        value="{{ request('awal') }}">
                </div>
                <div class="col">
                    <input type="date" name="akhir" class="form-control" placeholder="Tanggal Akhir"
                        value="{{ request('akhir') }}">
                </div>
                <div class="col">
                    <input type="text" name="search" class="form-control" placeholder="Cari Nama"
                        value="{{ request('search') }}">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Pasien</h5>
                        <p class="card-text">{{ $totalPasien }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Hari Menginap</h5>
                        <p class="card-text">{{ $totalHari }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rata-rata Menginap</h5>
                        <p class="card-text">{{ $rataMenginap }} hari</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rentang Lama Menginap</h5>
                        <p class="card-text">{{ $minLamaMenginap }} - {{ $maxLamaMenginap }} hari</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Asal Pasien</h4>
                <ul class="list-group">
                    @foreach ($asalPasien as $daerah => $jumlah)
                        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $daerah }}:
                            {{ $jumlah }} pasien</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Jenis Kelamin Pasien</h4>
                <ul class="list-group">
                    @foreach ($jenisPasien as $jenis => $jumlah)
                        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $jenis }}:
                            {{ $jumlah }} pasien</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Jenis Penyakit Pasien</h4>
                <ul class="list-group">
                    @foreach ($penyakitPasien as $penyakit => $jumlah)
                        <li class="list-group-item d-flex justify-content-between">{{ $penyakit }}:
                            {{ $jumlah }} pasien</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Kategori Penyakit Pasien</h4>
                <ul class="list-group">
                    @foreach ($kpenyakitPasien as $kpenyakit => $jumlah)
                        <li class="list-group-item d-flex justify-content-between">{{ $kpenyakit }}:
                            {{ $jumlah }} pasien</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Asal Daerah</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Jenis Penyakit</th>
                    <th>Kategori Penyakit</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Checkout</th>
                    <th>Lama Menginap (hari)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formattedPasiens as $pasien)
                    <tr>
                        <td>{{ $pasien['nama'] }}</td>
                        <td>{{ $pasien['alamat'] }}</td>
                        <td>{{ $pasien['kelurahan'] }}</td>
                        <td>{{ $pasien['jeniskelamin'] }}</td>
                        <td>{{ $pasien['pendidikan'] }}</td>
                        <td>{{ $pasien['pekerjaan'] }}</td>
                        <td>{{ $pasien['jenis_penyakit'] }}</td>
                        <td>{{ $pasien['kategori_penyakit'] }}</td>
                        <td>{{ $pasien['tanggal_masuk'] }}</td>
                        <td>{{ $pasien['tanggal_checkout'] }}</td>
                        <td>{{ $pasien['lama_menginap'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $varlaporanpasien->links() }}
        </div>
    </div>
@endsection
