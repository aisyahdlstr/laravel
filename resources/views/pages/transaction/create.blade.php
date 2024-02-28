@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5">Tambah Transaksi Baru</h4>
    <form action="{{ route('transaction.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="produk">Produk</label>
            <select name="product_id" class="form-control" id="produk" required>
                @foreach ($products as $item )
                    <option value="{{ $item->id }}">{{ $item->name }} ( {{ $item->stock }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="quantity" required>
        </div>

        @if (session('error'))
            <div class="alert alert-danger mb-3">
                {{ session('error') }}
            </div>
        @endif

        <div class="d-flex-align-item-center gap-2">
            <button class="btn btn-primay px-3" type="submit">Simpan</button>
            <a href="{{ route('transaction.index') }}" class="btn btn-light px-3">Back to</a>
        </div>
    </form>

</div>
@endsection
