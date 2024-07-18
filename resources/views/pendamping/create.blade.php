<!-- resources/views/pendamping/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Pendamping</h2>
        <form method="POST" action="{{ route('pendamping.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi:</label>
                <input type="text" name="provinsi" id="provinsi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" name="umur" id="umur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan:</label>
                <input type="text" name="pendidikan" id="pendidikan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" required>
                @error('tanggal_masuk')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="pasien_id">Pasien</label>
                <select class="form-control" id="pasien_id" name="pasien_id">
                    @foreach($pasiens as $pasien)
                        <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Pendamping</button>
        </form>
    </div>
@endsection
