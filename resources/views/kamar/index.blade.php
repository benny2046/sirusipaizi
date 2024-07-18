@extends('layouts.app')

@section('content')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Data Kamar</h1>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                    <a class="btn app-btn-success" href="{{ route('kamar.create') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd"
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg>
                        Tambah Data
                    </a>
                </div>
            </div><!--//row-->
        </div><!--//table-utilities-->
    </div><!--//col-auto-->
</div><!--//row-->
<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
        aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell" style="text-align:center;">No</th>
                                <th class="cell" style="text-align:center;">Nama Kamar</th>
                                <th class="cell" style="text-align:center;">Jumlah Kasur</th>
                                <th class="cell" style="text-align:center;">Status</th>
                                <th class="cell" style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($kamars as $kamar)
                            <tr>
                                <td class="cell" style="text-align:center;">{{ $no++}}</td>
                                <td class="cell"><span class="truncate">{{ $kamar->nama_kamar }} </span></td>
                                <td class="cell" style="text-align:center;">{{ $kamar->jumlah_kasur }}</td>
                                <td class="cell" style="text-align:center;">{{ $kamar->status }}</td>
                                <td class="cell" style="text-align:center;">
                                    <a class="btn-sm app-btn-primary" href="{{ route('kamar.edit', $kamar) }}">Edit</a>
                                    <a class="btn-sm app-btn-secondary" href="{{ route('kamar.show', $kamar) }}">Detail</a>
                                    <form action="{{ route('kamar.destroy', $kamar) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm app-btn-danger" onclick="return confirm('Anda yakin ingin menghapus kamar ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--//table-responsive-->

            </div><!--//app-card-body-->
        </div><!--//app-card-->

    </div><!--//tab-pane-->
</div>
@endsection
