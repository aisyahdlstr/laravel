@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5"> Tambah Data Dosen</h4>
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for ="namadosen">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" required>
        </div>
        <div class="d-flex-align-item-center gap-2">
            <button class="btn btn-primary px-3" type="submit">Tambah</button>
            <a href="{{ route('dosen.index') }}" class="btn btn-light px-3">Cancel</a>
        </div>
    </form>

</div>
@endsection
