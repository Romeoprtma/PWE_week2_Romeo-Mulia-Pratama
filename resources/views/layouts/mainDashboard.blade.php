<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    @include('partials.sidebar')
    {{-- main content --}}
    <div class="content">
    @yield('/home')
    @yield('/produk')
    @yield('inputProduk')
    </div>

</body>
</html>
