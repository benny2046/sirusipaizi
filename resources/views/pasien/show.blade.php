@extends('layouts.app')

@section('content')
<h2> Detail Pasien</h2>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
            <div class="mb-2">
                <strong>Nama :</strong> {{ $pasien->nama }}
            </div>
            <div class="mb-2">
                <strong>Jenis Kelamin :</strong> {{ $pasien->jeniskelamin }}
            </div>
            <div class="mb-2">
                <strong>Umur :</strong> {{ $pasien->umur }}
            </div>
            <div class="mb-2">
                <strong>Telepon :</strong> {{ $pasien->phone }}
            </div>
            <div class="mb-2">
                <strong>Alamat :</strong> {{ $pasien->alamat }}
            </div>
            <div class="mb-2">
                <strong>Kelurahan :</strong> {{ $pasien->kelurahan }}
            </div>
            <div class="mb-2">
                <strong>Kecamata :</strong> {{ $pasien->kecamatan }}
            </div>
            <div class="mb-2">
                <strong>Kabupaten :</strong> {{ $pasien->kabupaten }}
            </div>
            <div class="mb-2">
                <strong>Provinsi :</strong> {{ $pasien->provinsi }}
            </div>
            <div class="mb-2">
                <strong>Pendidikan :</strong> {{ $pasien->pendidikan }}
            </div>
            <div class="mb-2">
                <strong>Pekerjaan :</strong> {{ $pasien->pekerjaan }}
            </div>
            <div class="mb-2">
                <strong>Jenis Penyakit :</strong> {{ $pasien->jenis_penyakit }}
            </div>
            <div class="mb-2">
                <strong>Kategori Penyakit :</strong> {{ $pasien->kategori_penyakit }}
            </div>
            <div class="mb-2">
                <strong>Tanggal Check In :</strong> {{ $pasien->created_at }}
            </div>
            <div class="mb-2" type="">
                <strong>Tanggal Masuk :</strong> {{ $pasien->tanggal_masuk }}
            </div>
            <div class="mb-2">
                <strong>Nama Kamar:</strong> {{ $pasien->kamar->nama_kamar }}
            </div>
            <div class="row justify-content-between">
                <div class="col-auto">
                    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
