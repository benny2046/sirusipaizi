@extends('layouts.app')

@section('content')
    <h1 class="app-page-title">Reservasi</h1>
    <hr class="mb-4 border-4" />
    <div class="row g-4 settings-section">
        <div class="col-12 col-md-12">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <form class="settings-form" action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 class="app-page-title">Informasi Pasien</h2>
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="phone">Telepon</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" class="form-label" for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" class="form-label" for="kecamatan">Kecamatan
                            </label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" class="form-label" for="kabupaten">Kabupaten / Kota</label>
                            <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" class="form-label" for="provinsi">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                            <select class="form-select w-auto" id="jeniskelamin" name="jeniskelamin" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="umur" class="form-label">Umur</label>
                            <input type="number" class="form-control" id="umur" name="umur" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" class="form-label" for="pendidikan">Pendidikan</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" class="form-label" for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" class="form-label" for="jenis_penyakit">Jenis
                                Penyakit</label>
                            <input type="text" class="form-control" id="jenis_penyakit" name="jenis_penyakit"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="kategori_penyakit">Kategori Penyakit</label>
                            <select class="form-control" name="kategori_penyakit">
                                <option value=""></option>
                                <option value="Kanker">Kanker</option>
                                <option value="Non-Kanker">Non-Kanker</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="tanggal_masuk">Tanggal
                                Masuk</label><br>
                            <input type="date" id="tanggal_masuk" name="tanggal_masuk" required>
                        </div>
                    </div>

                    <label class="form-label" for="tambah_pendamping">Tambah Pendamping:</label>
                    <input type="checkbox" name="tambah_pendamping" id="tambah_pendamping" onclick="togglePendamping()">

                    <div id="pendamping-section" style="display: none;" class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="nama_pendamping">Nama
                                    Pendamping</label>
                                <input type="text" class="form-control" name="nama_pendamping">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="phone_pendamping">Nomor Telepon
                                    Pendamping</label>
                                <input type="number" class="form-control" name="phone_pendamping">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="provinsi_pendamping">Alamat
                                    Pendamping</label>
                                <input type="text" class="form-control" name="provinsi_pendamping" placeholder="Provinsi">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="jeniskelaminpendamping">Jenis Kelamin
                                    Pendamping</label>
                                <select class="form-select w-auto" id="jeniskelaminpendamping" name="jeniskelaminpendamping">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="umur_pendamping">Umur
                                    Pendamping</label>
                                <input type="number" class="form-control" name="umur_pendamping">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="pendidikan_pendamping">Pendididkan
                                    Pendamping</label>
                                <input type="text" class="form-control" name="pendidikan_pendamping">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="pekerjaan_pendamping">Pekerjaan
                                    Pendamping</label>
                                <input type="text" class="form-control" name="pekerjaan_pendamping">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tanggal_masuk_pendamping">Tanggal masuk
                                    Pendamping</label>
                                    <br>
                                <input type="date" name="tanggal_masuk_pendamping">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Surat rujukan dari Rumash Sakit</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror"
                            name="file" required>
                        <!-- error message untuk title -->
                        @error('file')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/reservasi" class="btn btn-secondary">Kembali</a>
                </form>
                <script>
                    function togglePendamping() {
                        var pendampingSection = document.getElementById('pendamping-section');
                        pendampingSection.style.display = (pendampingSection.style.display === 'none') ? 'block' : 'none';
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
