@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3"> Data Prodi</h4>
    <a href="{{ route('prodi.create') }}" class="btn btn-primary px-4">Tambah Data Prodi</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodis as $item)
                    <tr>
                        <td>{{ $item->nama_prodi  }}</td>
                        <td>
                            <a href="{{ route('prodi.edit', $item->id) }}" class="btn btn-warning text-white">Edit</a>
                            <form action="{{ route('prodi.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="confirm('Are you sure ?')">Hapus</button>

                            </form>
                        </td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
