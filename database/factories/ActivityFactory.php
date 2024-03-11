<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "activity_name" => $this->faker->name(),
            "percentage" => $this->faker->numberBetween(1, 100),
            "unit_id" => $this->faker->numberBetween(1, 3)
        ];
    }
}
