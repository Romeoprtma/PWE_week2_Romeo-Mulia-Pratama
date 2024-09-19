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
    {{-- side Bar --}}
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>

        </ul>
    </div>

    {{-- main content --}}
    <div class="main-content">
        <header>
            <h1>Selamat datang di dashboard Penjualan</h1>
        </header>

        {{-- Stats Card --}}
        <div class="cards">
            <div class="card">
                <h3>Total Produk</h3>
                <p id="total-products">320</p>
            </div>
            <div class="card">
                <h3>Penjualan Hari Inik</h3>
                <p id="sales-today">100</p>
            </div>
            <div class="card">
                <h3>Total Pendapatan</h3>
                <p id="total-revenue">Rp 50,000,000</p>
            </div>
            <div class="card">
                <h3>Pengguna Terdaftar</h3>
                <p id="registered-users">350</p>
            </div>
        </div>
        <div class="alert alert-primary" role="alert">
            a simple primary alert-check it out!
        </div>

        {{-- Sales Chart --}}
        <div id="chart">
            <h2>Grafik Penjualan Bulanan</h2>
            <canvas id="salesChart"></canvas>
        </div>
    </div>

</body>
</html>
