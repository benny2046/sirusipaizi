@extends('layouts.app')

@section('content')
    <h2> Detail Laporan Pasien</h2>
    <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class="mb-2">
                    {{-- <strong>Nama RSP :</strong> {{ $laporanpasien ->nama_rsp }} --}}
                </div>
                <div class="mb-2">
                    <strong>Nama Pasien :</strong> {{ $laporanpasien ->nama }}
                </div>
                <div class="mb-2">
                    <strong>Umur :</strong> {{ $laporanpasien ->umur }}
                </div>
                <div class="mb-2">
                    <strong>Jenis Kelamin :</strong> {{ $laporanpasien->jeniskelamin}}
                </div>
                <div class="mb-2">
                    <strong>Alamat :</strong> {{ $laporanpasien->alamat }}
                </div>
                <div class="mb-2">
                    <strong>Kelurahan :</strong> {{ $laporanpasien->kelurahan }}
                </div>
                <div class="mb-2">
                    <strong>Kecamatan :</strong> {{ $laporanpasien->kecamatan }}
                </div>
                <div class="mb-2">
                    <strong>Kota/Kabupaten :</strong> {{ $laporanpasien->kabupaten }}
                </div>
                <div class="mb-2">
                    <strong>Provinsi :</strong> {{ $laporanpasien->provinsi }}
                </div>
                <div class="mb-2">
                    <strong>Pendidikan :</strong> {{ $laporanpasien->pendidikan }}
                </div>
                <div class="mb-2">
                    <strong>Pekerjaan :</strong> {{ $laporanpasien->pekerjaan }}
                </div>
                <div class="mb-2">
                    <strong>Status Menginap :</strong> {{ $laporanpasien->status_rawat }}
                </div>
                <div class="mb-2">
                    <strong>Jenis Penyakit :</strong> {{ $laporanpasien->jenis_penyakit }}
                </div>
                <div class="mb-2">
                    <strong>Kategori Penyakit :</strong> {{ $laporanpasien->kategori_penyakit }}
                </div>
                <div class="mb-2">
                    <strong>Tanggal Check In :</strong> {{ $laporanpasien->created_at ->format('Y-m-d') }}
                </div>
                <div class="mb-2" type="">
                    <strong>Tanggal Masuk :</strong> {{ $laporanpasien->tanggal_masuk }}
                </div>
                <div class="mb-2" type="">
                    <strong>Tanggal Check Out :</strong> {{ $laporanpasien->deleted_at ? $laporanpasien->deleted_at->format('Y-m-d') : '' }}
                </div>
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a href="{{ route('laporanpasien.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
