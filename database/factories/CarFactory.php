<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create([
                'role' => 'employee'
            ]),
            'brand' => fake()->randomElement(['Audi', 'Peugeot', 'Bmw', 'Renault', 'Fiat']),
            'model' => fake()->company(),
            'year' => fake()->year(),
            'km' => rand(100000, 200000),
            'description' => fake()->text(),
            'price' => rand(1000, 2000),
        ];
    }
}
