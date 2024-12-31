<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PeminjamanDosen;

class PeminjamanDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PeminjamanDosen::create([
            'status' => 'Dosen',
            'nama' => 'Dr. Budi Santoso',
            'nip' => '19820311',
            'email' => 'budi.santoso@example.com',
            'notelp' => '081234567890',
            'alat' => 'Mikrotik',
            'jumlah_alat' => 1,
            'tanggal_peminjaman' => '2024-01-01',
        ]);

        PeminjamanDosen::create([
            'status' => 'Staff Akademik',
            'nama' => 'Siti Aminah',
            'nip' => '19850922',
            'email' => 'siti.aminah@example.com',
            'notelp' => '082345678901',
            'alat' => 'Multimeter',
            'jumlah_alat' => 2,
            'tanggal_peminjaman' => '2024-01-05',
        ]);
    }
}
