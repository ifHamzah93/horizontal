<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
	protected $table = "produk";

	protected $fillable = [
        'nama', 'harga', 'diskon', 'stok', 'deskripsi', 'gambar1', 'gambar2', 'gambar3', 'gambar4', 'status',  'idkategori', 'created_at', 'updated_at'
    ];
}
