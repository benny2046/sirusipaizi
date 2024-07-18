@extends('layouts.app')

@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Laporan Pasien</h1>
        </div>
    </div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-4">
            <form action="/laporanpasien" method="get" style="display: flex">
                <div class="col-md-6">
                    <label class="form-label">Tanggal Awal</label><br>
                    <input type="date" id="tanggal" name="awal" placeholder="dd-mm-yy" value="{{ request('awal') }}"
                        required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tanggal Akhir</label><br>
                    <input type="date" id="#" name="akhir" placeholder="dd-mm-yy"
                        value="{{ request('akhir') }}">
                </div>
                <button type="submit" class="btn btn-info w-15 my-4 mb-2 col-2"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
    <div class="col-auto mb-3">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                    <form class="docs-search-form row gx-1 align-items-center" action="{{ route('laporanpasien.index') }}"
                        method="GET">
                        <div class="col-auto">
                            <input type="text" id="search-docs" name="search" class="form-control search-docs"
                                placeholder="Search">
                        </div>
                    </form>
                </div><!--//col-->
                <div class="col-auto">
                    <div class="modal fade" dty id="download" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cetak Laporan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="/cetak-excel">
                                    @csrf
                                    <div class="modal-body">

                                        <label class="text-xl text-dark font-weight-bolder col-6">Tanggal Awal</label>
                                        <div class="mb-2">
                                            <input type="date" class="form-control" id="nama" name="awal">
                                        </div>
                                        <label class="text-xl text-dark font-weight-bolder col-6">Tanggal Akhir</label>
                                        <div class="mb-2">
                                            <input type="date" class="form-control" id="nama" name="akhir">
                                        </div>
                                    </div>
                                    <div class="footer px-4 mb-2">
                                        <button type="submit"
                                            class="btn bg-success float-sm-start col-md-2 mt-2 mb-2">Cetak</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="app-card-actions"> --}}
                    <div class="dropdown">
                        <a class="btn app-btn-secondary dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Download
                        </a>
                        <!--//dropdown-toggle-->
                        <ul class="dropdown-menu">
                            <li>
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#pasienpdf">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                        <path
                                            d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
                                        <path
                                            d="M4.603 12.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.6 11.6 0 0 0-1.997.406 11.3 11.3 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.244.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 5.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z" />
                                    </svg> PDF
                                </button>

                            </li>
                            <li>
                                {{-- <a class="dropdown-item" href="{{route('exportpasien')}}"> --}}
                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#pasienexport">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                        <path
                                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5zM3 12v-2h2v2zm0 1h2v2H4a1 1 0 0 1-1-1zm3 2v-2h3v2zm4 0v-2h3v1a1 1 0 0 1-1 1zm3-3h-3v-2h3zm-7 0v-2h3v2z" />
                                    </svg> Excel
                                </button>

                            </li>
                        </ul>
                    </div>
                    <!--//dropdown-->
                </div>
            </div>
            <div class="modal fade" dty id="pasienexport" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Cetak Laporan Pasien</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form method="post" action="/export-laporanpasien">
                            @csrf
                            <div class="modal-body">

                                <label class="text-xl text-dark font-weight-bolder col-6">Tanggal Awal</label>
                                <div class="mb-2">
                                    <input type="date" class="form-control" id="nama" name="awal">
                                </div>
                                <label class="text-xl text-dark font-weight-bolder col-6">Tanggal Akhir</label>
                                <div class="mb-2">
                                    <input type="date" class="form-control" id="nama" name="akhir">
                                </div>
                            </div>
                            <div class="footer px-4 mb-2">
                                <button type="submit"
                                    class="btn btn-success float-sm-start col-md-2 mt-2 mb-2">Cetak</button>
                                <button type="button" class="btn btn-danger float-sm-end col-md-2 mt-2 mb-2"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive" id="laporan">
                        <table class="table app-table-hover table-bordered mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">No</th>
                                    <th class="cell" style="text-align:center;">Nama Pasien</th>
                                    <th class="cell" style="text-align:center;">Jenis Kelamin</th>
                                    <th class="cell" style="text-align:center;">Alamat</th>
                                    <th class="cell" style="text-align:center;">Jenis Penyakit</th>
                                    <th class="cell" style="text-align:center;">Tanggal Masuk</th>
                                    <th class="cell" style="text-align:center;">Tanggal Keluar</th>
                                    <th class="cell" style="text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($varlaporanpasien as $laporanpasien)
                                    <tr>
                                        <td class="cell">{{ $no++ }}</td>
                                        <td class="cell">{{ $laporanpasien->nama }}</td>
                                        <td class="cell">{{ $laporanpasien->jeniskelamin }}</td>
                                        <td class="cell">{{ $laporanpasien->alamat }}</td>
                                        <td class="cell">{{ $laporanpasien->jenis_penyakit }}</td>
                                        <td class="cell" style="text-align:center;">
                                            <span>{{ $laporanpasien->tanggal_masuk }}</span>
                                        </td>
                                        <td class="cell" style="text-align:center;">
                                            <span>{{ $laporanpasien->deleted_at }}</span>
                                        </td>
                                        <td class="cell" style="text-align:center;">
                                            <a class="btn-sm app-btn-secondary"
                                                href="{{ route('laporanpasien.show', $laporanpasien->id) }}">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->
            </div><!--//app-card-->
            <div class="pagination justify-content-center">
                {{ $varlaporanpasien->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div><!--//tab-pane-->
    </div>
    <div class="modal fade" dty id="pasienpdf" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cetak Laporan Pasien
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/laporan-pdf" target="_blank">
                    @csrf
                    <div class="modal-body">

                        <label class="text-xl text-dark font-weight-bolder col-6">Tanggal
                            Awal</label>
                        <div class="mb-2">
                            <input type="date" class="form-control" id="nama" name="awal">
                        </div>
                        <label class="text-xl text-dark font-weight-bolder col-6">Tanggal
                            Akhir</label>
                        <div class="mb-2">
                            <input type="date" class="form-control" id="nama" name="akhir">
                        </div>
                    </div>
                    <div class="footer px-4 mb-2">
                        <button type="submit" class="btn btn-success float-sm-start col-md-2 mt-2 mb-2">Cetak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection
