<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail Page</title>
</head>
<body>
    <h3>Detail Of Product</h3><br>
    @if ($product->image)
        <img src="{{ asset($product->image) }}" alt="Product Image" width="200">
    @else
        No Image
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Name</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $product->stock }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $product->price }}</td>
        </tr>
    </table>    
</body>
</html>