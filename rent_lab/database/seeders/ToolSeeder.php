<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Tool;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run()
    {
        Tool::create([
            'tool_name' => 'Mikrotik',
            'description' => 'Router Mikrotik untuk jaringan.',
            'quantity' => 10,
            'available_quantity' => 8,
            'status' => 'available'
        ]);

        Tool::create([
            'tool_name' => 'Multimeter',
            'description' => 'Alat ukur listrik digital.',
            'quantity' => 15,
            'available_quantity' => 12,
            'status' => 'available'
        ]);
    }
}
