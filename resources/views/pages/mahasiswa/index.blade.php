@extends('layouts.app')

@section('content')
<div class="container">
    <h4> Data Mahasiswa</h4>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary px-4">Tambah Data Mahasiswa</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Matkul</th>
                    <th>Nama Dosen</th>
                    <th>Nama Prodi</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $item)
                    <tr>
                        <td>{{ $item->nim  }}</td>
                        <td>{{ $item->nama_mhs  }}</td>
                        <td>{{ $item->nama_matkul  }}</td>
                        <td>{{ $item->nama_dosen  }}</td>
                        <td>{{ $item->nama_prodi }}</td>
                        <td>{{ date($item->tgl_lahir) }}</td>
                        <td>{{ $item->alamat_mhs  }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $item->nim) }}" class="btn btn-warning btn-sm text-white mb-3">Edit</a>

                            <form method="POST" action="{{ route('mahasiswa.destroy', $item->nim) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-2" type="submit" onclick="confirm('Are you sure?')">Hapus</button>
                            </form>
                        </td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
