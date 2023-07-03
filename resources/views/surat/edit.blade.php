@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Surat</h1>
    <hr />
    <form action="{{ route('surat.update', $surat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nomor Surat</label>
                <input type="text" name="nomor_surat" class="form-control" placeholder="Masukan Nomor Surat" value="{{ $surat->nomor_surat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Pengirim</label>
                <input type="text" name="pengirim" class="form-control" placeholder="pengirim" value="{{ $surat->pengirim }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Penerima</label>
                <input type="text" name="penerima" class="form-control" placeholder="penerima" value="{{ $surat->penerima }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Isi Surat</label>
                <input type="text" name="isi_surat" class="form-control" placeholder="isi_surat" value="{{ $surat->penerima }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" placeholder="kategori" value="{{ $surat->penerima }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
