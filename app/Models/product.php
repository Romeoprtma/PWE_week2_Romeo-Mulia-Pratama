<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['kode_produk', 'nama_produk','deskripsi','harga','jumlah_produk','image','create_at','update_at'];
}
