@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Tambahkan Surat</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nomor_surat" class="form-control" placeholder="Masukan Nomor Surat">
            </div>
            <div class="col">
                <input type="text" name="pengirim" class="form-control" placeholder="Masukan Nama Pengirim">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="penerima" class="form-control" placeholder="Masukan Nama Penerima">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="isi_surat" class="form-control" placeholder="Masukan Isi Surat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kategori" class="form-control" placeholder="Masukan Kategori">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
