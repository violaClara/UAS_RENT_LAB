<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB class
use Illuminate\Support\Facades\Schema; // Jika diperlukan

class BorrowHistorySeeder extends Seeder
{
    public function run()
    {
        DB::table('borrow_histories')->insert([
            [
                'borrower_name' => 'John Doe',
                'tool_id' => 1, // ID alat dari tabel tools
                'borrow_date' => '2024-06-01',
                'return_date' => '2024-06-10',
                'amount' => 3,
                'action' => 'approved',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'borrower_name' => 'Jane Smith',
                'tool_id' => 2,
                'borrow_date' => '2024-06-05',
                'return_date' => '2024-06-12',
                'amount' => 1,
                'action' => 'rejected',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
