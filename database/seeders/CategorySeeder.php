<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     Category::factory(5)->create();
    // }
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'nama' => 'Sayuran'],
            ['id' => 2, 'nama' => 'Buah-buahan'],
            ['id' => 3, 'nama' => 'Buah Lokal'],
            ['id' => 4, 'nama' => 'Buah Impor'],
            ['id' => 5, 'nama' => 'Sayuran Lokal'],
            ['id' => 6, 'nama' => 'Sayuran Import'],
            ['id' => 7, 'nama' => 'Semua'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['id' => $category['id']], // Kondisi pencarian berdasarkan ID
                ['nama' => $category['nama']] // Data yang akan di-update atau dibuat
            );
        }
    }
}
