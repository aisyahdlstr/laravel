@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-2">All Data Transaction</h4>
    <a href="{{ route('transaction.create') }}" class="btn btn-primary px-4">Create New Data</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $items)
                <tr>
                    <td>
                        {{ $items->products->name }}
                    </td>
                    <td>
                       {{ number_format($items->quantity) }}
                    </td>
                    <td>
                        {{ $items->users->name }}
                    </td>
                    <td>
                        <form method="POST" action="{{ route('transaction.destroy', $items->id) }}">
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
