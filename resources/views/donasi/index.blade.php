@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Donasi</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('donasi.create') }}" class="btn btn-success">Tambah Donasi</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Jumlah</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($donasis as $donasi)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $donasi->nama }}</td>
                        <td>{{ $donasi->no_hp }}</td>
                        <td>{{ $donasi->jumlah }}</td>
                        <td>
                            
                            <img src="{{ asset('storage/donasi/' . $donasi->bukti) }}" class="rounded" style="width: 150px">
                        
                        </td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('donasi.destroy', $donasi->id) }}" method="POST">
                                <a href="{{ route('donasi.show', $donasi->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('donasi.edit', $donasi->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $donasis->links() }}
    </div>
@endsection
