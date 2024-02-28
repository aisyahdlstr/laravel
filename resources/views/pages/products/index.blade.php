@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-2">All Data Product</h4>
    <a href="{{ route('product.create') }}" class="btn btn-primary px-4">Create New Data</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Produk Picture</th>
                    <th>Product Name</th>
                    <th>Price Product</th>
                    <th>Stock</th>
                    <th>Description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $items)
                <tr>
                    <td>
                        <img src="{{ url('storage/' .$items->image) }}" style="width:50px; height:50px; object-fit:cover" alt="" />
                    </td>
                    <td>
                        {{ $items->name }}
                    </td>
                    <td>
                       Rp. {{ number_format($items->price) }}
                    </td>
                    <td>
                        {{ number_format($items->stock) }}
                    </td>
                    <td>
                        {{ $items->description }}
                    </td>
                    <td>
                        <a href="{{ route('product.edit', $items->id) }}" class="btn btn-warning text-white m-2">Edit</a>

                        <form method="POST" action="{{ route('product.destroy', $items->id) }}">
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
