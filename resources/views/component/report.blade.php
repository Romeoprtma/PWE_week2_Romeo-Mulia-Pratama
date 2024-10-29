
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

h2 {
    text-align: center; /* Untuk menyelaraskan teks ke tengah secara horizontal */
}

.date {
    text-align: right; /* Menyelaraskan tanggal ke kanan */
    margin-bottom: 20px; /* Jarak di bawah tanggal */
}
    </style>
</head>
<body>
    <div class="date">
        Tanggal: {{ now()->format('d-m-Y H:i') }} <!-- Menampilkan tanggal dan waktu saat ini -->
    </div>
    <h2>Laporan Produk</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Jumlah Produk</th>
            </tr>
        </thead>

        <tbody>
            @foreach($produk as $key => $items)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $items->nama_produk }}</td>
                <td>{{ $items->deskripsi}}</td>
                <td>Rp{{ number_format($items->harga, 0, ',', '.') }}</td> <!-- Format harga -->
                <td>{{ $items->jumlah_produk }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>

