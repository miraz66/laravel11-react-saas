<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsedFeature>
 */
class UsedFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'credits' => $this->faker->numberBetween(1, 100), // credits between 1 and 100
            'feature_id' => Feature::factory(), // create a new feature if not specified
            'user_id' => User::factory(), // create a new user if not specified
            'data' => json_encode([
                'attribute1' => $this->faker->word,
                'attribute2' => $this->faker->sentence,
                'attribute3' => $this->faker->numberBetween(1, 100)
            ]),
        ];
    }
}
