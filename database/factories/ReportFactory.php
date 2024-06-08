<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'categorie' => $this->faker->word,
            'image' => "",
            'quartie' => $this->faker->citySuffix,
            'commune' => $this->faker->city,
            'description' => $this->faker->paragraph,
            'localisation' => $this->faker->address,
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),

        ];
    }
}
