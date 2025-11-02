<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ulasan;

class UlasanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['produk_id' => 1, 'user_id' => 1, 'rating' => 5, 'komentar' => 'Produk sangat bagus dan sesuai deskripsi!'],
            ['produk_id' => 1, 'user_id' => 1, 'rating' => 4, 'komentar' => 'Kualitas oke, pengiriman cepat.'],
            ['produk_id' => 2, 'user_id' => 1, 'rating' => 3, 'komentar' => 'Cukup bagus, tapi ada sedikit cacat kecil.'],
        ];

        foreach ($data as $item) {
            Ulasan::create($item);
        }
    }
}
