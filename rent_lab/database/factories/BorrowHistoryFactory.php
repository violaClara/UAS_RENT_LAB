<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tool;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowHistory>
 */
class BorrowHistoryFactory extends Factory
{
    protected $model = \App\Models\BorrowHistory::class;

    public function definition()
    {
        return [
            'borrower_id' => $this->faker->unique()->numerify('100####'),
            'borrower_name' => $this->faker->name(),
            'tool_id' => null, // Will be updated in the seeder
            'amount' => $this->faker->numberBetween(1, 10),
            'borrow_date' => $this->faker->dateTimeBetween('-2 weeks', 'now'),
            'return_date' => $this->faker->dateTimeBetween('now', '+2 weeks'),
            'action' => $this->faker->randomElement(['approved', 'rejected', 'pending']),
        ];
    }
}