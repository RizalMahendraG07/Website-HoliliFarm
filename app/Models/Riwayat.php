<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama_pembeli', 'alamat', 'produk_id', 'jumlah_produk', 'harga_total'];  // Perbaiki 'produk' ke 'produk_id'

    public function product()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
