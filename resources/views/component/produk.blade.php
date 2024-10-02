@extends('layouts.mainDashboard')
@section('/produk')
     <div class="title">
        <h1 class="h1">Daftar Produk</h1>
        <p>Temukan produk terbaik untuk kebutuhan</p>
    </div>


    <!-- Card Produk -->
    <div class="product-grid">
        @foreach ( $produk as $items )
    <!-- Card Produk -->
    <div class="product-card">
        @if($items->image)
                    <!-- Menampilkan gambar produk -->
                    <img src="{{ asset($items->image) }}" alt="{{ $items->nama_produk }}" style="max-width: 200px; height: auto;">
                @else
                    <!-- Placeholder jika tidak ada gambar -->
                    <img src="https://via.placeholder.com/200" alt="Produk Default">
                @endif
        <h3>{{ $items ->nama_produk }}</h3>
        <p class="price">{{ $items ->harga }}</p>
        <p class="description">{{ $items ->deskripsi }}</p>
        <button class="card-button"> Edit </button>
        <button class="card-button"> Delete </button>
    </div>
    @endforeach
</div>
@endsection
