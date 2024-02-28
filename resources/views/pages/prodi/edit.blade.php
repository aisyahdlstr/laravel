@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5"> Edit Data {{ $prodi->title }}</h4>
    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for ="namaprodi">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_prodi" value="{{ $prodi->nama_prodi }}" id="nama_prodi" required>
        </div>
        <div class="d-flex-align-item-center gap-2">
            <button class="btn btn-primary px-3" type="submit">Tambah</button>
            <a href="{{ route('prodi.index') }}" class="btn btn-light px-3">Cancel</a>
        </div>
    </form>

</div>
@endsection
