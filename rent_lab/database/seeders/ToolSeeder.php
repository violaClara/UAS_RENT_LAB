<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB class
use Illuminate\Support\Facades\Schema; // Jika diperlukan

class ToolSeeder extends Seeder
{
    public function run()
    {
        DB::table('tools')->insert([
            [
                'tool_name' => 'Mikrotik',
                'tool_code' => 'TOOL001',
                'description' => 'Penunjang praktikum jaringan',
                'quantity' => 10,
                'available_quantity' => 8,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tool_name' => 'Multimeter',
                'tool_code' => 'TOOL002',
                'description' => 'Alat pengukur listrik',
                'quantity' => 5,
                'available_quantity' => 3,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
