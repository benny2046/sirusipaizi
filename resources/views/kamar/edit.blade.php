@extends('layouts.app')
@section('content')
    <h1 class="app-page-title">Edit Kamar</h1>
    <div class="row gy-4">
        <div class="col-12 col-lg-6">
            <form method="POST" action="{{ route('kamar.update', $kamar) }}">
                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                    @csrf
                    @method('PATCH')
                    <div class="app-card-body px-4 w-100">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label">
                                        <strong>
                                            <label for="nama_kamar">Nama Kamar</label>
                                        </strong>
                                    </div>
                                    <div class="item-data">
                                        <input type="text" name="nama_kamar" class="form-control"
                                            value="{{ $kamar->nama_kamar }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label">
                                        <strong>
                                            <label for="jumlah_kasur">Jumlah Kasur</label>
                                        </strong>
                                    </div>
                                    <div class="item-data">
                                        <input type="number" name="jumlah_kasur" class="form-control"
                                            value="{{ $kamar->jumlah_kasur }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-card-footer p-4 mt-auto">
                        <button type="submit" class="btn app-btn-primary">Simpan</button>
                        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
