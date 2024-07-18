@extends('layouts.app', [
    'activePage' => 'kamar',
])
@section('content')
    <h1>Detail Kamar</h1>

    <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class="mb-2">
                    <strong>Nama Kamar:</strong> {{ $kamar->nama_kamar }}
                </div>
                <div class="mb-2">
                    <strong>Jumlah Kasur:</strong> {{ $kamar->jumlah_kasur }}
                </div>
                <div class="mb-2">
                    <strong>Status:</strong> {{ $kamar->status }}
                </div>
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>
@endsection
