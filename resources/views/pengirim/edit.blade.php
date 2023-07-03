@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Pengirim</h1>
    <hr />
    <form action="{{ route('pengirim.update', $pengirim->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Pengirim</label>
                <input type="text" name="pengirim" class="form-control" placeholder="Masukan pengirim" value="{{ $pengirim->pengirim }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Hp</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone" value="{{ $pengirim->no_hp }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ $pengirim->alamat }}" >
            </div>
        </div>
    </form>
@endsection
