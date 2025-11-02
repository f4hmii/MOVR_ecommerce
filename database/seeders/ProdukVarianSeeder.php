<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProdukVarian;

class ProdukVarianSeeder extends Seeder
{
    public function run(): void
    {
        $varian = [
            ['produk_id' => 1, 'ukuran' => 'S', 'warna' => 'Putih', 'stok' => 20],
            ['produk_id' => 1, 'ukuran' => 'M', 'warna' => 'Hitam', 'stok' => 30],
            ['produk_id' => 2, 'ukuran' => 'L', 'warna' => 'Abu-abu', 'stok' => 10],
            ['produk_id' => 2, 'ukuran' => 'XL', 'warna' => 'Hitam', 'stok' => 10],
        ];

        foreach ($varian as $v) {
            ProdukVarian::create($v);
        }
    }
}
