<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'items', true), // URL for a placeholder image
            'route_name' => $this->faker->slug, // random slug
            'name' => $this->faker->word, // single word
            'description' => $this->faker->sentence, // single sentence
            'required_created' => $this->faker->numberBetween(1, 100), // random integer between 1 and 100
            'active' => $this->faker->boolean(80), // 80% chance of being true
        ];
    }
}
