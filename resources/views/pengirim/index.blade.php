@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Pengirim</h1>
    </div>
    <a href="{{ route('pengirim.create') }}" class="btn btn-primary">Tambahkan pengirim</a>

    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-bordered text-center">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Pengirim</th>
                <th>Nomor Hp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @if($pengirim->count() > 0)
                @foreach($pengirim as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->pengirim }}</td>
                        <td class="align-middle">{{ $rs->no_hp }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pengirim.show', $rs->id) }}" type="button" class="btn btn-success">Detail</a>
                                <a href="{{ route('pengirim.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('pengirim.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">pengirim kosong</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
