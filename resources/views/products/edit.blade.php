<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Edit Page</title>
</head>
<body>
    <h3>Product Edit Form</h3>
    <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <ul>
            <li>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" value="{{ $product->name }}"><br><br>
            </li>
            <li>
                <label for="stock">Stock: </label>
                <input type="text" name="stock" id="stock" value="{{ $product->stock }}"><br><br>
            </li>
            <li>
                <label for="price">Price: </label>
                <input type="text" name="price" id="price" value="{{ $product->price }}"><br><br>
            </li>
            <li>
                @if ($product->image)
                    <img src="{{ asset($product->image) }}" alt="Product Image" width="150">
                @else
                    No Image
                @endif
            </li>
            <li>
                <label for="image">Image: </label>
                <input type="file" name="image" id="image"><br><br>
            </li>
            <li>
                <button type="submit">Update</button>
            </li>
        </ul>
    </form>
</body>
</html>