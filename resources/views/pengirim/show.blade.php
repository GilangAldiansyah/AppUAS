@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Pengirim</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Pengirim</label>
            <input type="text" name="pengirim" class="form-control" placeholder="Pengirim" value="{{ $pengirim->pengirim }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nomor Hp</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp" value="{{ $pengirim->no_hp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ $pengirim->alamat }}" readonly>
        </div>
    </div>
    </div>
@endsection
