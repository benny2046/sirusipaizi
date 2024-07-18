@extends('layouts.app', [
    'activePage' => 'Profile',
])
@section('content')
    <h1>Detail User</h1>

    <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class="mb-2">
                    <strong>Rumah Singgah Pasien :</strong> {{ $user->rsp }}
                </div>
                <div class="mb-2">
                    <strong>Nama :</strong> {{ $user->name }}
                </div>
                <div class="mb-2">
                    <strong>Phone :</strong> {{ $user->phone }}
                </div>
                <div class="mb-2">
                    <strong>Email :</strong> {{ $user->email }}
                </div>
                <div class="mb-2">
                    <strong>Role :</strong> {{ $user->role }}
                </div>
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>
@endsection
