@extends('layouts.main')
@section('title', 'Product Page')
@section('content')
<p>List Of Product</p>
<br>
<form action="{{ route('product.create') }}" method="GET" style="display: inline-block">
    <button type="submit">Add New Product</button>
</form>
<br><br>
<form action="{{ route('product.search') }}" method="GET" style="display: inline-block">
    <input type="text" name="keyword" >
    <button type="submit">Search</button>
</form>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $products as $key => $product )
        <tr>
            <td>{{ $products->firstItem() + $key }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->price }}</td>
            <td>
                @if ($product->image)
                    <img src="{{ asset($product->image) }}" alt="Product Image" width="50">
                @else
                    No Image
                @endif
            </td>
            <td>
                {{-- Tombol detail --}}
                <form action="{{ route('product.show', $product) }}" method="GET" style="display: inline-block">
                    <button type="submit">Detail</button>
                </form>
                |
                {{-- Tombol edit --}}
                <form action="{{ route('product.edit', $product) }}" method="GET" style="display: inline-block">
                    <button type="submit">Edit</button>
                </form>
                |
                {{-- Tombol delete --}}
                <form action="{{ route('product.destroy', $product) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" align="center">No product.</td>
        </tr>
        @endforelse
    </tbody>
</table>
<br>
{{-- Pagination --}}
{{ $products->links() }}
@endsection