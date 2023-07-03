@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail penerima</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">penerima</label>
            <input type="text" name="penerima" class="form-control" placeholder="penerima" value="{{ $penerima->penerima }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nomor Hp</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp" value="{{ $penerima->no_hp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ $penerima->alamat }}" readonly>
        </div>
    </div>
    </div>
@endsection
