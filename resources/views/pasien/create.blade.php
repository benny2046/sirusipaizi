@extends('layouts.app')

@section('content')
    <h1 class="app-page-title">Tambah Pasien</h1>
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

                    <form method="POST" action="{{ route('pasien.store') }}" class="settings-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="phone">Telepon</label>
                                <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="kelurahan">Kelurahan</label>
                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror"
                                    id="kelurahan" name="kelurahan" value="{{ old('kelurahan') }}" required>
                                @error('kelurahan')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="kecamatan">Kecamatan </label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror"
                                    id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}" required>
                                @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="kabupaten">Kabupaten / Kota</label>
                                <input type="text" class="form-control @error('kabupaten') is-invalid @enderror"
                                    id="kabupaten" name="kabupaten" value="{{ old('kabupaten') }}" required>
                                @error('kabupaten')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="provinsi">Provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror"
                                    id="provinsi" name="provinsi" value="{{ old('provinsi') }}" required>
                                @error('provinsi')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                <select class="form-select w-auto @error('jeniskelamin') is-invalid @enderror" id="jeniskelamin"
                                    name="jeniskelamin" required>
                                    <option value="laki-laki {{ old('jeniskelamin') }}">Laki-Laki</option>
                                    <option value="perempuan {{ old('jeniskelamin') }}">Perempuan</option>
                                </select>
                                @error('jeniskelamin')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="umur" class="form-label">Umur</label>
                                <input type="number" class="form-control @error('umur') is-invalid @enderror"
                                    id="umur" name="umur" value="{{ old('umur') }}" required>
                                @error('umur')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="pendidikan">Pendidikan</label>
                                <input type="text" class="form-control @error('pendidikan') is-invalid @enderror"
                                    id="pendidikan" name="pendidikan" value="{{ old('pendidikan') }}">
                                @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                    id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
                                @error('pekerjaan')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="jenis_penyakit">Jenis Penyakit</label>
                                <input type="text" class="form-control @error('jenis_penyakit') is-invalid @enderror"
                                    id="jenis_penyakit" name="jenis_penyakit" value="{{ old('jenis_penyakit') }}"
                                    required>
                                @error('jenis_penyakit')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="kategori_penyakit">Kategori Penyakit</label>
                                <input type="text"
                                    class="form-control"
                                    id="kategori_penyakit" name="kategori_penyakit"
                                    value="{{ old('kategori_penyakit') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" class="form-label" for="tanggal_masuk">Tanggal Masuk</label>
                                <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror"
                                    id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" required>
                                @error('tanggal_masuk')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="kamar_id" value="{{ $availableKamar->id }}">
                        <!-- Input fields for Pendamping -->
                        <label class="form-label" for="tambah_pendamping">Tambah Pendamping:</label>
                        <input type="checkbox" name="tambah_pendamping" id="tambah_pendamping"
                            onclick="togglePendamping()">

                        <div id="pendamping-section" style="display: none;" class="form-group">
                            <label class="form-label" for="nama_pendamping">Nama Pendamping</label>
                            <input type="text" class="form-control" name="nama_pendamping" required>

                            <label class="form-label" class="form-label" for="phone_pendamping">Nomor Telepon Pendamping</label>
                            <input type="number" class="form-control" name="phone_pendamping">

                            <label class="form-label" for="provinsi_pendamping">Alamat Pendamping</label>
                            <input type="text" class="form-control" name="provinsi_pendamping">

                            <label class="form-label" for="jenis_kelamin_pendmaping">Jenis Kelamin Pendamping</label>
                            <select class="form-control" name="jenis_kelamin_pendamping">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>

                            <label class="form-label" for="umur_pendamping">Umur Pendamping</label>
                            <input type="number" class="form-control" name="umur_pendamping">

                            <label class="form-label" for="pendidikan_pendamping">Pendididkan Pendamping</label>
                            <input type="text" class="form-control" name="pendidikan_pendamping">

                            <label class="form-label" for="pekerjaan_pendamping">Pekerjaan Pendamping</label>
                            <input type="text" class="form-control" name="pekerjaan_pendamping">

                            <label class="form-label" for="tanggal_masuk_pendamping">Tanggal masuk Pendamping</label>
                            <input type="date" class="form-control" name="tanggal_masuk_pendamping">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
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
    </div>
    </div>
@endsection
