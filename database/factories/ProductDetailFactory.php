<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductDetail>
 */
class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'berat' => fake()->randomNumber(),
            'asal' => fake()->sentence(rand(1,3), false),
            'nutrisi' => fake()->sentence(rand(1,4), false),
            'sisastok' => fake()->randomNumber(),
            'product_id' => Product::factory()  
        ];
    }
}
