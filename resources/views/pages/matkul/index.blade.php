@extends('layouts.app')

@section('content')
<div class="container">
    <h4> Data Matkul</h4>
    <a href="{{ route('matkul.create') }}" class="btn btn-primary px-4">Tambah Data Matkul</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama Matkul</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matkuls as $item)
                    <tr>
                        <td>{{ $item->nama_matkul  }}</td>
                        <td>{{ $item->semester  }}</td>
                        <td>{{ $item->sks  }}</td>
                        <td>
                            <a href="{{ route('matkul.edit', $item->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>

                            <form action="{{ route('matkul.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit" onclick="confirm('Are you sure?')">Hapus</button>

                            </form>
                        </td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
