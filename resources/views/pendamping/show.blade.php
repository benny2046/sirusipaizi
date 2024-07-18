<!-- resources/views/pendamping/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Pendamping</h2>
        <p><strong>Nama:</strong> {{ $pendamping->nama }}</p>
        <p><strong>Phone:</strong> {{ $pendamping->phone }}</p>
        <p><strong>Alamat:</strong> {{ $pendamping->provinsi }}</p>
        <p><strong>Umur:</strong> {{ $pendamping->umur }}</p>
        <p><strong>Pekerjaan:</strong> {{ $pendamping->pekerjaan }}</p>
        <p><strong>Pendidikan:</strong> {{ $pendamping->pendidikan }}</p>
        <p><strong>Tanggal Maasuk:</strong> {{ $pendamping->tanggal_masuk }}</p>
        {{-- <p><strong>Pasien id:</strong> {{ $pendamping->pasien_id}}</p> --}}
        <a href="{{ route('pendamping.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
