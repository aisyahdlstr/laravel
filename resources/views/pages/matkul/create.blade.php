@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5"> Tambah Data Matkul</h4>
    <form action="{{ route('matkul.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for ="namadosen">Nama Matkul</label>
            <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" required>
        </div>
        <div class="mb-3">
            <label for ="semester">Semester</label>
            <input type="number" class="form-control" name="semester" id="semester" required>
        </div><div class="mb-3">
            <label for ="sks">Sks</label>
            <input type="number" class="form-control" name="sks" id="sks" required>
        </div>
        <div class="d-flex-align-item-center gap-2">
            <button class="btn btn-primary px-3" type="submit">Tambah</button>
            <a href="{{ route('matkul.index') }}" class="btn btn-light px-3">Cancel</a>
        </div>
    </form>

</div>
@endsection
