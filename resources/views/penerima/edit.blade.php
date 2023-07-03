@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Pengirimpenerima</h1>
    <hr />
    <form action="{{ route('penerima.update', $penerima->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">penerima</label>
                <input type="text" name="penerima" class="form-control" placeholder="Masukan penerima" value="{{ $penerima->penerima }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Hp</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone" value="{{ $penerima->no_hp }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ $penerima->alamat }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
