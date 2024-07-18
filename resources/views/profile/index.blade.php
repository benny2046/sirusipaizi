@extends('layouts.app')

@section('content')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Data Pengunjung</h1>
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
                    <form class="table-search-form row gx-1 align-items-center" action="{{ route('user.index') }}" method="GET">
                        <div class="col-auto">
                            <input type="text" id="search-orders" name="search"
                                class="form-control search-orders" placeholder="Search">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn app-btn-secondary">Search</button>
                        </div>
                    </form>

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
                                <th class="cell" style="text-align:center;">RSP</th>
                                <th class="cell" style="text-align:center;">Nama Pengunjung</th>
                                <th class="cell" style="text-align:center;">Role</th>
                                <th class="cell" style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($varuser as $data)
                            <tr>
                                <td class="cell" style="text-align:center;">{{ $no++}}</td>
                                <td class="cell"><span class="truncate">{{ $data->rsp }} </span></td>
                                <td class="cell" style="text-align:center;">{{ $data->name }}</td>
                                <td class="cell" style="text-align:center;">{{ $data->role }}</td>
                                <td class="cell" style="text-align:center;">
                                    {{-- <a class="btn-sm app-btn-success" href="{{ route('user.edit', $data->id) }}">Edit</a> --}}
                                    <a class="btn-sm app-btn-secondary" href="{{ route('user.show', $data->id) }}">Detail</a>
                                    {{-- <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;"> --}}
                                        {{-- @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm app-btn-danger" onclick="return confirm('Anda yakin ingin menghapus user ini?')">Hapus</button>
                                    </form> --}}
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
