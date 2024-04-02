<?php

namespace Database\Factories;

use App\Models\Languages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Languages>
 */
class LanguagesFactory extends Factory
{
    protected $model = Languages::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'language' => fake()->unique()->word(),
            'slug' => fake()->unique()->word(),
        ];
    }
}
