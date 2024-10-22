<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'kode_produk';
    protected $fillable = ['kode_produk', 'nama_produk', 'deskripsi', 'harga', 'jumlah_produk', 'image'];

    public $timestamps = true;
}
