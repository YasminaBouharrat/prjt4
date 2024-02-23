<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produit>
 */
class produitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->text(123),
            'prix' => $this->faker->randomFloat(2, 1, 1000),
            'Quantité' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->imageUrl(),
            
        ];
    }
}
