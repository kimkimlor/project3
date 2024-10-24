<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks'; // Nama tabel
    protected $fillable = ['nama', 'deskripsi', 'harga', 'stok']; // Kolom yang bisa diisi
}
