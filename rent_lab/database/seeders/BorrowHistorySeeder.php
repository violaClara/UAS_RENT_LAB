<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tool;
use App\Models\BorrowHistory;



class BorrowHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $tools = Tool::all();

        BorrowHistory::factory()->count(10)->create()->each(function ($borrow) use ($tools) {
            $borrow->update([
                'tool_id' => $tools->random()->id,
            ]);
        });
    }
}
