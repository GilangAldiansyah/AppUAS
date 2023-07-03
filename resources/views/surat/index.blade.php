@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Surat</h1>
    </div>
    <a href="{{ route('surat.create') }}" class="btn btn-primary">Tambahkan Surat</a>

    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-bordered text-center">
        <thead class="table-primary">
            <tr>
                <th>No Surat</th>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Isi Surat</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @if($surat->count() > 0)
                @foreach($surat as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->pengirim }}</td>
                        <td class="align-middle">{{ $rs->penerima }}</td>
                        <td class="align-middle">{{ $rs->isi_surat }}</td>
                        <td class="align-middle">{{ $rs->kategori }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('surat.show', $rs->id) }}" type="button" class="btn btn-success">Detail</a>
                                <a href="{{ route('surat.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('surat.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin?')">
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
                    <td class="text-center" colspan="5">Surat kosong</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
