@extends('layouts.app')

@section('content')
<div class="container">
    <h4> Data Dosen</h4>
    <a href="{{ route('dosen.create') }}" class="btn btn-primary px-4">Tambah Data Dosen</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosens as $item)
                    <tr>
                        <td>{{ $item->nama_dosen  }}</td>
                        <td>
                            <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-warning text-white">Edit</a>
                            <form action="{{ route('dosen.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="confirm('Are you sure ? ')">Hapus</button=>

                            </form>
                        </td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
