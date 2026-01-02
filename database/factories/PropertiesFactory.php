<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'user_id' => 1,
             'type_id' => 1,
             'name' => fake()->name(),
             'adresse' => fake()->streetAddress(),
             'city'     => fake()->city(),
             'postalCode' => 4020,
             'rooms'=>fake()->numberBetween(1, 50),
             'surface'=>fake()->randomNumber(),
             'yearsBuild'=>fake()->year()
        ];
    }
}
