@extends('layouts.mainDashboard')

@section('/home')
<div class="main-content">
    <header>
        <h1>Selamat datang di dashboard Penjualan</h1>
    </header>

    {{-- Stats Card --}}
    <div class="cards">
        <div class="card">
            <h3>Total Produk</h3>
            <p id="total-products">{{ $totalProducts }}</p>
        </div>
        <div class="card">
            <h3>Penjualan Hari Inik</h3>
            <p id="sales-today">{{ $salesToday }}</p>
        </div>
        <div class="card">
            <h3>Total Pendapatan</h3>
            <p id="total-revenue">{{ $totalRevenue }}</p>
        </div>
        <div class="card">
            <h3>Pengguna Terdaftar</h3>
            <p id="registered-users">{{ $registeredUsers }}</p>
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

@endsection
