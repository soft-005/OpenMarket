<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(2);
        return [
            'title' => $title,
            'content' => fake()->paragraph(2),
            'price' => fake()->numberBetween(100,9999),
            'featured' => '/Uploads/products/default%20('.rand(1,10).').jpg',
            'category_id' => rand(1,4), 
            'slug' => Str::slug($title),
        ];
    }
}
