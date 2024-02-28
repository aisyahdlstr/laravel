@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5">Tambah Mahasiswa</h4>
    <form action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="prodi_id">Nama Prodi</label>
            <select name="prodi_id" class="form-control" id="prodi_id" required>
                @foreach ($prodis as $prodi )
                    <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="matkul_id">Nama Matkul</label>
            <select name="matkul_id" class="form-control" id="matkul_id" required>
                @foreach ($matkuls as $matkul )
                    <option value="{{ $matkul->id }}">{{ $matkul->nama_matkul }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="dosen_id">Nama Dosen</label>
            <select name="dosen_id" class="form-control" id="dosen_id" required>
                @foreach ($dosens as $dosen)
                    <option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_mhs">Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" required>
        </div>
        <div class="mb-3">
            <label for="tmpt_lahir">Tempat Lahir</label>
            <input type="text" name="tmpt_lahir" class="form-control" id="tmpt_lahir" required>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir">Tgl Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
        </div>
        <div class="mb-3">
            <label for="alamat_mhs">Alamat Mahasiswa</label>
            <input type="text" name="alamat_mhs" class="form-control" id="alamat_mhs" required>
        </div>

        <div class="d-flex-align-item-center gap-2">
            <button class="btn btn-primay px-3" type="submit">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-light px-3">Back to</a>
        </div>
    </form>

</div>
@endsection
