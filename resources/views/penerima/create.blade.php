@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Tambahkan Penerima</h1>
    <hr />
    <form action="{{ route('penerima.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="penerima" class="form-control" placeholder="Masukan nama penerima">
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
