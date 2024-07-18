<!-- resources/views/pendamping/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Pendamping</h2>
        <form method="POST" action="{{ route('pendamping.update', $pendamping->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $pendamping->nama }}" required>
            </div>
            <!-- ... (sisa input fields) -->
            <button type="submit" class="btn btn-primary">Update Pendamping</button>
        </form>
    </div>
@endsection
