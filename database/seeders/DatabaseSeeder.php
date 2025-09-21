<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'admin',
            'password' => '123',
            'is_admin' => false
        ]);
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProductDetailSeeder::class
        ]);
    }
}
