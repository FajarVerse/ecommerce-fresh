<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;
    public function definition(): array
    {
        return [
            'order_number' => $this->faker->unique()->bothify('ORD-####-####'),
            'customer_name' => $this->faker->name(),
            'status' => $this->faker->randomElement(['pending', 'processed', 'delivered']),
            'total_amount' => $this->faker->randomFloat(2, 50, 1000),
            'order_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
