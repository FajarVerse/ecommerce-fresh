<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     Product::factory(100)->recycle([
    //         Category::all()
    //     ])->create();
    // }

    public function run(): void
    {
        $products = [
            [
                'nama' => 'Apel Fuji',
                'harga' => 25000,
                'stok' => 100,
                'deskripsi' => 'Apel Fuji segar impor dari Jepang',
                'image' => 'apel-fuji.jpg',
                'category_id' => 4, // Buah Impor
            ],
            [
                'nama' => 'Apel Malang',
                'harga' => 15000,
                'stok' => 80,
                'deskripsi' => 'Apel lokal segar dari Malang',
                'image' => 'apel-malang.jpg',
                'category_id' => 3, // Buah Lokal
            ],
            [
                'nama' => 'Jeruk Mandarin',
                'harga' => 20000,
                'stok' => 120,
                'deskripsi' => 'Jeruk mandarin manis segar',
                'image' => 'jeruk-mandarin.jpg',
                'category_id' => 4,
            ],
            [
                'nama' => 'Jeruk Bali',
                'harga' => 18000,
                'stok' => 60,
                'deskripsi' => 'Jeruk bali segar lokal',
                'image' => 'jeruk-bali.jpg',
                'category_id' => 3,
            ],
            [
                'nama' => 'Bayam Hijau',
                'harga' => 5000,
                'stok' => 150,
                'deskripsi' => 'Sayur bayam hijau segar',
                'image' => 'bayam-hijau.jpg',
                'category_id' => 1, // Sayuran
            ],
            [
                'nama' => 'Kangkung',
                'harga' => 4000,
                'stok' => 200,
                'deskripsi' => 'Kangkung segar dari petani lokal',
                'image' => 'kangkung.jpg',
                'category_id' => 5, // Sayuran Lokal
            ],
            [
                'nama' => 'Wortel Brastagi',
                'harga' => 10000,
                'stok' => 130,
                'deskripsi' => 'Wortel segar lokal dari Brastagi',
                'image' => 'wortel.jpg',
                'category_id' => 5,
            ],
            [
                'nama' => 'Brokoli',
                'harga' => 12000,
                'stok' => 70,
                'deskripsi' => 'Brokoli segar hijau',
                'image' => 'brokoli.jpg',
                'category_id' => 1,
            ],
            [
                'nama' => 'Anggur Merah',
                'harga' => 45000,
                'stok' => 90,
                'deskripsi' => 'Anggur merah impor segar',
                'image' => 'anggur-merah.jpg',
                'category_id' => 4,
            ],
            [
                'nama' => 'Pisang Raja',
                'harga' => 12000,
                'stok' => 110,
                'deskripsi' => 'Pisang raja manis lokal',
                'image' => 'pisang-raja.jpg',
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
