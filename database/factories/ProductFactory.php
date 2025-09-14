<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
        return [
            'nama' => fake()->sentence(rand(1,2), false),
            'harga' => fake()->randomFloat(2, 10000, 50000),
            'stok' => fake()->randomNumber(),
            'deskripsi' => fake()->paragraph(),
            'image'=> fake()->word(),
            'category_id' => Category::factory()  
        ];
    }
}
