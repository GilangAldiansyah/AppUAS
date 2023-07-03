@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail surat</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nomor Surat</label>
            <input type="text" name="nomor_surat" class="form-control" placeholder="Nomor Surat" value="{{ $surat->nomor_surat }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">pengirim</label>
            <input type="text" name="pengirim" class="form-control" placeholder="pengirim" value="{{ $surat->pengirim }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Penerima</label>
            <input type="text" name="penerima" class="form-control" placeholder="penerima" value="{{ $surat->penerima }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Isi surat</label>
            <input type="text" name="isi_surat" class="form-control" placeholder="isi surat" value="{{ $surat->isi_surat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="{{ $surat->kategori }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $surat->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $surat->updated_at }}" readonly>
        </div>
    </div>
@endsection
