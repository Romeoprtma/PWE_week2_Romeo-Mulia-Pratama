@extends('layouts.mainDashboard')
@section('laporan')
    <div class="main-content">
        <header>
            <h1>
                Selamat Datang di Dashboard Penjualan
            </h1>
        </header>
        <div class="container mt-4">
            <h2 class="text-center mb-4">
                Laporan Produk
            </h2>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Jumlah Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $produk as $key => $items )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $items->nama_produk }}</td>
                            <td>{{ $items->deskripsi }}</td>
                            <td>{{number_format($items->harga, 0, ',', ',' ) }}</td>
                            <td>{{ $items->jumlah_produk }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('report') }}" class="btn btn-secondary w-100 d-flex justify-center align-item-center text-white cursor-pointer">Export to PDF</a>
        </div>
    </div>
@endsection
