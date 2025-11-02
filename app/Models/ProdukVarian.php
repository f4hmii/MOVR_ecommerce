<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukVarian extends Model
{
    use HasFactory;
protected $table = 'produk_varian';
    protected $primaryKey = 'varian_id';
    protected $fillable = ['produk_id', 'ukuran', 'warna', 'stok_varian'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
