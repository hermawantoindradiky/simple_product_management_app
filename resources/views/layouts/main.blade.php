<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h3>Simple Product Management App</h3>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('product.index') }}">Product</a>
        <a href="{{ route('about') }}">About</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>