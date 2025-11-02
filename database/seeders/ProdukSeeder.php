<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::create([
            'nama' => 'Kaos MOVR Basic',
            'deskripsi' => 'Kaos nyaman dari brand MOVR.',
            
            'harga' => 120000,
            'gambar' => 'kaos_movr.jpg',
            'kategori_id' => 1,
            'penjual_id' => 1, // admin MOVR
        ]);

        Produk::create([
            'nama' => 'Jaket MOVR Street',
            'deskripsi' => 'Jaket stylish untuk harian.',
            
            'harga' => 350000,
            'gambar' => 'jaket_movr.jpg',
            'kategori_id' => 2,
            'penjual_id' => 1,
        ]);
    }
}
