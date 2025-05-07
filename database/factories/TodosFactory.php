<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Todos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todos>
 */
class TodosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(6, true),
            'completed' => $this->faker->boolean(),
            'user_id' => User::factory(), // creates and links a user
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
