@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5"> Edit Data {{ $matkul->title }}</h4>
    <form action="{{ route('matkul.update', $matkul->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for ="namadosen">Nama Matkul</label>
            <input type="text" class="form-control" name="nama_matkul" value="{{ $matkul->nama_matkul }}" id="nama_matkul">
        </div>
        <div class="mb-3">
            <label for ="semester">Semester</label>
            <input type="number" class="form-control" name="semester" value="{{ $matkul->semester }}" id="semester" >
        </div><div class="mb-3">
            <label for ="sks">Sks</label>
            <input type="number" class="form-control" name="sks" value="{{ $matkul->sks }}" id="sks" required>
        </div>
        <div class="d-flex-align-item-center gap-2">
            <button class="btn btn-primary px-3" type="submit">Simpan Perubahan</button>
            <a href="{{ route('matkul.index') }}" class="btn btn-light px-3">Cancel</a>
        </div>
    </form>

</div>
@endsection
