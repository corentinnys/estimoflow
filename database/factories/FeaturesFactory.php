<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FeaturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pieces = [
                    'Salon',
                    'Chambre',
                    'Cuisine',
                    'Salle de bain',
                    'Toilettes',
                    'Bureau',
                    'Salle à manger',
                    'Buanderie',
                    'Garage',
                    'Balcon',
                ];

                return [
                    'name' => fake()->randomElement($pieces),
                ];
    }
}
