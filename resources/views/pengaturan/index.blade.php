@extends('layouts.app')

@section('content')
<div class="mx-5" style="display: grid;grid-template-columns: repeat(2,1fr);grid-column-gap: 10%">
    <form class="my-3" method="post" action="/pengaturan-ubah">
        @csrf
        <h4>SETTING</h4>

        <label class="text-xl text-dark font-weight-bolder">Nama</label>
        <div class="mb-2">
            <input type="text" class="form-control" required name="nama" id="nama" value="{{auth()->user()->name}}">
            <input type="hidden" class="form-control" required name="id" id='userId' value="{{auth()->user()->id}}">
        </div>
        <label class="text-xl text-dark font-weight-bolder">Email</label>
        <div class="mb-2">
            <input type="email" name="email" class="form-control" id="" value="{{auth()->user()->email}}">
        </div>
        <label class="text-xl text-dark font-weight-bolder">Telepon</label>
        <div class="mb-2">
            <input type="number" name="phone" class="form-control" id="" value="{{auth()->user()->phone}}">
        </div>
        <label class="text-xl text-dark font-weight-bolder">Password Baru</label>
        <div class="mb-2">
            <input type="password" name="password" class="form-control" id="password1">
        </div>
        <label class="text-xl text-dark font-weight-bolder">Konfirmasi Password Baru</label>
        <div class="mb-2">
            <input type="password" name="password2" class="form-control" id="password2">
            <span id="passwordMessage"></span>
        </div>

    <div class="footer px-4 mb-2">
        <button type="submit" onclick="" class="btn btn-warning float-sm-start col-md-2 mt-4">Edit</button>
    </div>
</form>
</div>
@endsection
