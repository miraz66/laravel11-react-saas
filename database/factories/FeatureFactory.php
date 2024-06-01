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
        static $routeNumber = 1; // Static variable to keep track of the number
        
        return [
            'image' => $this->faker->imageUrl(640, 480, 'items', true), // URL for a placeholder image
            'route_name' => 'feature' . $routeNumber++ . '.index', // Custom route name
            'name' => $this->faker->word, // Single word
            'description' => $this->faker->sentence, // Single sentence
            'required_created' => $this->faker->numberBetween(1, 100), // Random integer between 1 and 100
            'active' => $this->faker->boolean(80), // 80% chance of being true
        ];
    }
}
