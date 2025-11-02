<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
 protected $table = 'produk'; // ✅ penting
    protected $primaryKey = 'produk_id';
    protected $fillable = ['nama_produk', 'deskripsi', 'stok', 'harga', 'gambar', 'kategori_id', 'penjual_id'];

    //  Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    //  Relasi ke penjual
    public function penjual()
    {
        return $this->belongsTo(User::class, 'penjual_id');
    }

    //  Relasi ke varian
    public function varian()
    {
        return $this->hasMany(ProdukVarian::class, 'produk_id');
    }

    //  Relasi ke ulasan
    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'produk_id');
    }

    //  Relasi ke item transaksi
    public function transaksiItem()
    {
        return $this->hasMany(TransaksiItem::class, 'produk_id');
    }
}
