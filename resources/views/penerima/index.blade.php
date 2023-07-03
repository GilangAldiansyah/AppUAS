@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar penerima</h1>
    </div>
    <a href="{{ route('penerima.create') }}" class="btn btn-primary">Tambahkan penerima</a>

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
                <th>penerima</th>
                <th>Nomor Hp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @if($penerima->count() > 0)
                @foreach($penerima as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->penerima }}</td>
                        <td class="align-middle">{{ $rs->no_hp }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('penerima.show', $rs->id) }}" type="button" class="btn btn-success">Detail</a>
                                <a href="{{ route('penerima.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('penerima.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin?')">
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
                    <td class="text-center" colspan="5">penerima kosong</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
