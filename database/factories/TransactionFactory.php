<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']), // random status
            'price' => $this->faker->randomFloat(2, 10, 1000), // price between 10.00 and 1000.00
            'credits' => $this->faker->numberBetween(1, 100), // credits between 1 and 100
            'session_id' => $this->faker->uuid, // unique session ID
            'user_id' => User::factory(), // create a new user if not specified
            'package_id' => Package::factory(), // create a new package if not specified
        ];
    }
}
