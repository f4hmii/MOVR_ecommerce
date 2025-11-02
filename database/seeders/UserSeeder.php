<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin / Penjual
        User::create([
            'nama' => 'Admin MOVR',
            'email' => 'admin@movr.com',
            'password' => Hash::make('password'),
            'telepon' => '08123456789',
            'alamat' => 'Bandung, Jawa Barat',
            'role' => 'admin',
        ]);

        // Pembeli
        User::create([
            'nama' => 'Fahmi',
            'email' => 'fahmi@movr.com',
            'password' => Hash::make('password'),
            'telepon' => '08987654321',
            'alamat' => 'Lengkong, Bandung',
            'role' => 'pembeli',
        ]);
    }
}
