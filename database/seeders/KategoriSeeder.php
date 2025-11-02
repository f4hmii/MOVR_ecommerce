<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = ['Kaos', 'Celana', 'Jaket'];

        foreach ($kategori as $nama) {
            Kategori::create([
                'nama' => $nama,
                'slug' => Str::slug($nama),
            ]);
        }
    }
}
