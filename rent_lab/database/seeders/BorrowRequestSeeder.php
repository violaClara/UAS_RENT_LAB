<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB class
use Illuminate\Support\Facades\Schema; // Jika diperlukan

class BorrowRequestSeeder extends Seeder
{
    public function run()
    {
        DB::table('borrow_requests')->insert([
            [
                'borrower_name' => 'John Doe',
                'contact' => '081234567890',
                'tool_id' => 1, // ID dari alat yang ada di tabel tools
                'borrow_date' => '2024-06-01',
                'return_date' => '2024-06-10',
                'amount' => 2,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'borrower_name' => 'Jane Smith',
                'contact' => '089876543210',
                'tool_id' => 2,
                'borrow_date' => '2024-06-05',
                'return_date' => '2024-06-12',
                'amount' => 1,
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
