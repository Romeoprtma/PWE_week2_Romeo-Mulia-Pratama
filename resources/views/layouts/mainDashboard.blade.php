<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">
    @include('partials.sidebar')
    <div class="main-content">

        {{-- Main Content --}}
        <div class="content">
            @yield('home')
            @yield('inputProduk')
            @yield('editProduk')
            @yield('produk')
            @yield('laporan')
            @yield('report')
            @yield('userProduk')
        </div>
    </div>
    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
