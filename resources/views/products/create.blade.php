<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product Page</title>
</head>
<body>
    <h3>Add New Product Form</h3>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <ul>
            <li>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name"><br><br>
            </li>
            <li>
                <label for="stock">Stock: </label>
                <input type="text" name="stock" id="stock"><br><br>
            </li>
            <li>
                <label for="price">Price: </label>
                <input type="text" name="price" id="price"><br><br>
            </li>
            <li>
                <label for="image">Image: </label>
                <input type="file" name="image" id="image"><br><br>
            </li>
            <li>
                <button type="submit">Save</button>
            </li>
        </ul>
    </form>
</body>
</html>