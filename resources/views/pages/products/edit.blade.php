@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5">Edit Data {{ $product->title }}</h4>
    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image">Gambar</label>
            <input type="file" accept="image/*" name="image" class="form-control" id="image" >
            <span class="text-secondary">Jika tidak ingin mengubah gambar jangan diisi</span>
        </div>
        <div class="mb-3">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" >
        </div>
        <div class="mb-3">
            <label for="price">Product Price</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label for="stock">Product stock</label>
            <input type="number" name="stock" class="form-control" id="stock" value="{{ $product->stock }}">
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="d-flex-align-item-center gap-2">
            <button class="btn btn-primay px-3" type="submit">Simpan Perubahan</button>
            <a href="{{ route('product.index') }}" class="btn btn-light px-3">Back to</a>
        </div>
    </form>

</div>
@endsection
