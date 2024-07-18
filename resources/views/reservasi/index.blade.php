@extends('layouts.app')

@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Data Pendaftaran</h1>
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
                            <form class="table-search-form row gx-1 align-items-center" action="#" method="GET">
                                <div class="col-auto">
                                    <input type="text" id="search-orders" name="search"
                                        class="form-control search-orders" placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn app-btn-secondary">Search</button>
                                </div>
                            </form>

                        </div><!--//col-->
                        @if (Auth::user()->role == 'admin')
                            <div class="col-auto">
                                <a class="btn app-btn-success" href="{{ route('reservasi.create') }}">
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
                        @elseif (Auth::user()->role == 'pengunjung')
                            <div class="col-auto">
                                <a class="btn app-btn-success" href="{{ route('reservasi.create') }}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                        <path fill-rule="evenodd"
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                    </svg>
                                    Buat Reservasi
                                </a>
                            </div>
                        @endif
                    </div><!--//row-->
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div><!--//row-->
        <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            {{-- @if (Auth::user()->isAdmin() || count(Auth::user()->reservasi) > 0) --}}
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell" style="text-align:center;">No</th>
                                        <th class="cell" style="text-align:center;">Nama Pasien</th>
                                        <th class="cell" style="text-align:center;">Telepon</th>
                                        <th class="cell" style="text-align:center;">Alamat</th>
                                        <th class="cell" style="text-align:center;">Tanggal Masuk</th>
                                        <th class="cell" style="text-align:center;">Status</th>
                                        @if (Auth::user()->role != 'admin')
                                        @else
                                            <th class="cell" style="text-align:center;">Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($reservasi as $data)
                                        <tr>
                                            <td class="cell" style="text-align:center;">{{ $no++ }}</td>
                                            <td class="cell">{{ $data->nama }}</td>
                                            <td class="cell" style="text-align:center;">{{ $data->phone }}</td>
                                            <td class="cell" style="text-align:center;">{{ $data->alamat }}</td>
                                            <td class="cell" style="text-align:center;">
                                                {{ carbon\carbon::parse($data->tanggal_masuk)->isoFormat('DD MMMM YYYY') }}</td>
                                            <td class="cell" style="text-align:center;">{{ $data->status }}</td>
                                            <td class="cell" style="text-align:center;">
                                                @if (Auth::user()->role != 'admin')
                                                @else
                                                    <form class="d-inline"
                                                        action="{{ route('reservasi.setDiterima', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status" value="Diterima"
                                                            class="btn-sm app-btn-primary">
                                                        <button class="btn-sm app-btn-primary"
                                                            type="submit">Diterima</button>
                                                    </form>
                                                    {{-- <form class="d-inline">
                                                        <button href="{{ route('reservasi.ditolak', $data->id) }}" class="btn-sm app-btn-danger" type="submit">Ditolak</button>
                                                    </form> --}}
                                                    <a href="{{ route('reservasi.ditolak', $data->id) }}"
                                                        class="btn-sm app-btn-danger">Ditolak</a>
                                                    <form class="d-inline"
                                                        action="{{ route('reservasi.show', $data->id) }}">
                                                        <button type="submit">Detail</button>
                                                    </form>
                                                    {{-- <a type="submit" href="{{ route('reservasi.show', $data->id) }}">Detail</a> --}}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- @else
                                <!-- Jika pengunjung bukan admin dan tidak memiliki reservasi -->
                                <p>Anda tidak memiliki reservasi yang dapat ditampilkan.</p>
                            @endif --}}

                        </div><!--//table-responsive-->

                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//tab-pane-->
        </div>
    @endsection
