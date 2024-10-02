@extends('layouts.mainDashboard')
@section('inputProduk')

<div class="title">
    <h1 class="h1">Daftar Produk</h1>
    <p>Temukan produk terbaik untuk kebutuhan</p>
</div>
<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data" class="container mt-5">
    @csrf
    <div class="mb-3">
        <label for="nama_produk" class="form-label">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="harga" class="form-label">Harga:</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="jumlah_produk" class="form-label">Jumlah Produk:</label>
            <input type="number" name="jumlah_produk" id="jumlah_produk" class="form-control" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Upload Gambar Produk:</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Tambah Produk</button>
</form>
@endsection
