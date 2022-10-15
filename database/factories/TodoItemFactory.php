<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TodoItem>
 */
class TodoItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startDate = fake()->dateTime;
        return [
            'subject' => fake()->paragraphs(),
            'description' => fake()->text(),
            'priority' => fake()->randomElement([1, 2, 3, 4, 5]),
            'start_at' => $startDate,
            'finish_at' => fake()->dateTimeBetween($startDate, $startDate->format('Y-m-d H:i:s').' +2 days'),
            'user_id' => User::factory()
        ];
    }
}
