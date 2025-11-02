<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    protected $fillable = ['nama', 'email', 'password', 'telepon', 'alamat', 'role'];

    //  Relasi ke produk (jika dia penjual/admin)
    public function produk()
    {
        return $this->hasMany(Produk::class, 'penjual_id');
    }

    //  Relasi ke transaksi sebagai pembeli
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'pembeli_id');
    }

    //  Relasi ke ulasan
    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'pembeli_id');
    }
}
