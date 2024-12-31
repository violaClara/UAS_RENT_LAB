<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PeminjamanMhs;


class PeminjamanMhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PeminjamanMhs::create([
            'status' => 'Mahasiswa',
            'nama' => 'Budi Santoso',
            'nim' => '123456789',
            'email' => 'budi@example.com',
            'notelp' => '081234567890',
            'alat' => 'Mikrotik',
            'jumlah_alat' => 1,
            'tanggal_peminjaman' => now()->format('Y-m-d'),
        ]);

        PeminjamanMhs::create([
            'status' => 'Mahasiswa',
            'nama' => 'Siti Aminah',
            'nim' => '987654321',
            'email' => 'siti@example.com',
            'notelp' => '082345678901',
            'alat' => 'Multimeter',
            'jumlah_alat' => 2,
            'tanggal_peminjaman' => now()->format('Y-m-d'),
        ]);
    }
}
