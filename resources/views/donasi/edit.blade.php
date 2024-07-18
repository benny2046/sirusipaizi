@extends('layouts.app')

@section('content')
<h1 class="app-page-title">Edit Donasi</h1>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row gy-4">
        <div class="col-12 col-lg-6">
            <form method="POST" action="{{ route('donasi.update', $donasi->id) }}" enctype="multipart/form-data">
                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                    @csrf
                    @method('PUT')
                    <div class="app-card-body px-4 w-100">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label">
                                        <strong>
                                            <label for="nama">Nama</label>
                                        </strong>
                                    </div>
                                    <div class="item-data">
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $donasi->nama }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label">
                                        <strong>
                                            <label for="no_hp">No HP</label>
                                        </strong>
                                    </div>
                                    <div class="item-data">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $donasi->no_hp }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label">
                                        <strong>
                                            <label for="jumlah">Jumlah</label>
                                        </strong>
                                    </div>
                                    <div class="item-data">
                                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $donasi->jumlah }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label">
                                        <strong>
                                            <label for="bukti">Bukti Donasi (Foto)</label>
                                        </strong>
                                    </div>
                                    <div class="item-data">
                                        <input type="file" class="form-control" id="bukti" name="bukti">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-card-footer p-4 mt-auto">
                        <button type="submit" class="btn app-btn-primary">Simpan</button>
                        <a href="{{ route('donasi.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
{{-- <div class="container">
    <h2>Edit Donasi</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('donasi.update', $donasi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $donasi->nama }}" required>
        </div>
        <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $donasi->no_hp }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $donasi->jumlah }}" required>
        </div>
        <div class="form-group">
            <label for="bukti">Bukti Donasi (Foto)</label>
            <input type="file" class="form-control" id="bukti" name="bukti">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div> --}}
@endsection
