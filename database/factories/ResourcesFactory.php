<?php

namespace Database\Factories;

use App\Models\Languages;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resources>
 */
class ResourcesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Categories::all()->pluck('id')->toArray();
        $languages = Languages::all()->pluck('id')->toArray();

        return [
            'name' => fake()->company(),
            'summary' => fake()->sentence(),
            'slug' => fake()->unique()->company(),
            'category_id' => fake()->randomElement($categories), 
            'language_id' => fake()->randomElement($languages),
            'github_link' => fake()->optional()->url(),
            'website_link' => fake()->optional()->url(),
            'content' => fake()->paragraphs(3, true),
            'price' => fake()->optional()->randomFloat(2, 0, 1000),
        ];
    }
}
