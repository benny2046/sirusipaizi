@extends('layouts.app', [
    'activePage' => 'kamar',
])

@section('content')
    <h1 class="app-page-title">Tambah Kamar</h1>
    <div class="row gy-4">
        <div class="col-12 col-lg-6">
            <form action="{{ route('kamar.store') }}" method="POST"><!--//app-card-header-->
                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                    @csrf
                    <div class="app-card-body px-4 w-100">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong><label for="nama_kamar">Nama Kamar</label></strong>
                                    </div>
                                    <div class="item-data"><input type="text" name="nama_kamar" class="form-control"
                                            required></div>
                                </div><!--//col-->
                            </div><!--//row-->
                        </div><!--//item-->
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong><label for="jumlah_kasur">Jumlah Kasur</label></strong>
                                    </div>
                                    <div class="item-data"><input type="number" name="jumlah_kasur" class="form-control"
                                            required></div>
                                </div><!--//col-->
                            </div><!--//row-->
                        </div><!--//item-->
                    </div><!--//app-card-body-->
                    <div class="app-card-footer p-4 mt-auto">
                        <button type="submit" class="btn app-btn-secondary">Simpan</button>
                        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
                    </div><!--//app-card-footer-->
                </div><!--//app-card-->
            </form>
        </div><!--//col-->
    </div>
@endsection
