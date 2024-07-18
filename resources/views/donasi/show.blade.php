@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Donasi</h2>
    <a href="{{ route('donasi.index') }}" class="btn btn-secondary">Kembali</a>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <p class="card-text">Bukti Donasi:</p>
                        <img src="{{ asset('storage/donasi/'.$donasi->bukti) }}" class="w-50 rounded">
                        <hr>
                        <h5 class="card-title">Nama: {{ $donasi->nama }}</h5>
                        <p class="card-text">No HP: {{ $donasi->no_hp }}</p>
                        <p class="card-text">Jumlah: {{ $donasi->jumlah }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
