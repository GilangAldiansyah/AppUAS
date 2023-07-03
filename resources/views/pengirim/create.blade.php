@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Tambahkan Pengirim</h1>
    <hr />
    <form action="{{ route('pengirim.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="pengirim" class="form-control" placeholder="Masukan nama pengirim">
            </div>
            <div class="col">
                <input type="text" name="nomor handphone" class="form-control" placeholder="Masukan nomor handphone">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
