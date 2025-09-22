<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ProductDetail::factory(20)->recycle([
        //     Product::all()
        // ])->create();

        $productDetails = [
            [
                'product_id' => 1,
                'berat' => 0.25,
                'asal' => 'Indonesia',
                'nutrisi' => 'Kalium, Vit B6',
                'sisastok' => 120,
            ],
            [
                'product_id' => 2,
                'berat' => 0.30,
                'asal' => 'Vietnam',
                'nutrisi' => 'Vit C, Antioksidan',
                'sisastok' => 50,
            ],
            [
                'product_id' => 3,
                'berat' => 0.30,
                'asal' => 'Vietnam',
                'nutrisi' => 'Vit C, Serat',
                'sisastok' => 60,
            ],
            [
                'product_id' => 4,
                'berat' => 0.25,
                'asal' => 'Indonesia',
                'nutrisi' => 'Kalium, Vit B6',
                'sisastok' => 120,
            ],
            [
                'product_id' => 5,
                'berat' => 0.20,
                'asal' => 'Jepang',
                'nutrisi' => 'Serat, Antioksidan',
                'sisastok' => 100,
            ],
            [
                'product_id' => 6,
                'berat' => 0.25,
                'asal' => 'Indonesia',
                'nutrisi' => 'Kalium, Vit B6',
                'sisastok' => 120,
            ],
            [
                'product_id' => 7,
                'berat' => 0.20,
                'asal' => 'Amerika',
                'nutrisi' => 'Serat, Antioksidan',
                'sisastok' => 100,
            ],
            [
                'product_id' => 8,
                'berat' => 0.15,
                'asal' => 'Selandia Baru',
                'nutrisi' => 'Vit C, Serat',
                'sisastok' => 70,
            ],
            [
                'product_id' => 9,
                'berat' => 0.10,
                'asal' => 'Belanda',
                'nutrisi' => 'Zat Besi, Vit A',
                'sisastok' => 150,
            ],
            [
                'product_id' => 10,
                'berat' => 0.15,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit A, Serat',
                'sisastok' => 200,
            ],
            [
                'product_id' => 11,
                'berat' => 0.20,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit A, Antioksidan',
                'sisastok' => 130,
            ],
            [
                'product_id' => 12,
                'berat' => 0.15,
                'asal' => 'Italia',
                'nutrisi' => 'Vit K, Serat',
                'sisastok' => 70,
            ],
            [
                'product_id' => 13,
                'berat' => 0.10,
                'asal' => 'Indonesia',
                'nutrisi' => 'Likopen, Vit C',
                'sisastok' => 140,
            ],
            [
                'product_id' => 14,
                'berat' => 0.05,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit C, Capsaicin',
                'sisastok' => 90,
            ],
            [
                'product_id' => 15,
                'berat' => 0.15,
                'asal' => 'Spanyol',
                'nutrisi' => 'Vit A, Vit C',
                'sisastok' => 80,
            ],
            [
                'product_id' => 16,
                'berat' => 0.05,
                'asal' => 'Indonesia',
                'nutrisi' => 'Protein, Vit C',
                'sisastok' => 200,
            ],
            [
                'product_id' => 17,
                'berat' => 0.30,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit C, Serat',
                'sisastok' => 100,
            ],
            [
                'product_id' => 18,
                'berat' => 0.40,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit A, Vit C',
                'sisastok' => 90,
            ],
            [
                'product_id' => 19,
                'berat' => 0.25,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit C, Folat',
                'sisastok' => 60,
            ],
            [
                'product_id' => 20,
                'berat' => 0.20,
                'asal' => 'Indonesia',
                'nutrisi' => 'Serat, Vit C',
                'sisastok' => 110,
            ],
            [
                'product_id' => 21,
                'berat' => 0.25,
                'asal' => 'Indonesia',
                'nutrisi' => 'Antioksidan, Vit C',
                'sisastok' => 70,
            ],
            [
                'product_id' => 22,
                'berat' => 1.00,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit B, Lemak Sehat',
                'sisastok' => 40,
            ],
            [
                'product_id' => 23,
                'berat' => 0.20,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit C, Serat',
                'sisastok' => 80,
            ],
            [
                'product_id' => 24,
                'berat' => 0.30,
                'asal' => 'Chili',
                'nutrisi' => 'Antioksidan, Vit K',
                'sisastok' => 90,
            ],
            [
                'product_id' => 25,
                'berat' => 2.00,
                'asal' => 'Indonesia',
                'nutrisi' => 'Air, Vit A',
                'sisastok' => 100,
            ],
            [
                'product_id' => 26,
                'berat' => 0.30,
                'asal' => 'Mexico',
                'nutrisi' => 'Lemak Sehat, Vit E',
                'sisastok' => 60,
            ],
            [
                'product_id' => 27,
                'berat' => 0.30,
                'asal' => 'Italia',
                'nutrisi' => 'Antioksidan, Vit K',
                'sisastok' => 90,
            ],
            [
                'product_id' => 28,
                'berat' => 0.50,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit C, Bromelain',
                'sisastok' => 100,
            ],
            [
                'product_id' => 29,
                'berat' => 0.20,
                'asal' => 'Amerika',
                'nutrisi' => 'Vit C, Antioksidan',
                'sisastok' => 50,
            ],
            [
                'product_id' => 30,
                'berat' => 0.50,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit A, Papain',
                'sisastok' => 120,
            ],
            [
                'product_id' => 31,
                'berat' => 0.25,
                'asal' => 'Argentina',
                'nutrisi' => 'Serat, Vit C',
                'sisastok' => 80,
            ],
            [
                'product_id' => 32,
                'berat' => 0.20,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit C, Serat',
                'sisastok' => 110,
            ],
            [
                'product_id' => 33,
                'berat' => 0.20,
                'asal' => 'Afrika Selatan',
                'nutrisi' => 'Vit C, Serat',
                'sisastok' => 70,
            ],
            [
                'product_id' => 34,
                'berat' => 0.15,
                'asal' => 'Spanyol',
                'nutrisi' => 'Vit C, Antioksidan',
                'sisastok' => 90,
            ],
            [
                'product_id' => 35,
                'berat' => 0.10,
                'asal' => 'Turki',
                'nutrisi' => 'Vit C, Antioksidan',
                'sisastok' => 40,
            ],
            [
                'product_id' => 36,
                'berat' => 0.30,
                'asal' => 'Indonesia',
                'nutrisi' => 'Karbohidrat, Vit C',
                'sisastok' => 150,
            ],
            [
                'product_id' => 37,
                'berat' => 0.20,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit A, Serat',
                'sisastok' => 180,
            ],
            [
                'product_id' => 38,
                'berat' => 0.15,
                'asal' => 'Indonesia',
                'nutrisi' => 'Serat, Vit K',
                'sisastok' => 160,
            ],
            [
                'product_id' => 39,
                'berat' => 0.10,
                'asal' => 'Indonesia',
                'nutrisi' => 'Air, Vit K',
                'sisastok' => 200,
            ],
            [
                'product_id' => 40,
                'berat' => 0.10,
                'asal' => 'Indonesia',
                'nutrisi' => 'Vit K, Serat',
                'sisastok' => 140,
            ],
            [
                'product_id' => 41,
                'berat' => 0.20,
                'asal' => 'Indonesia',
                'nutrisi' => 'Serat, Vit C',
                'sisastok' => 130,
            ],
        ];

        foreach ($productDetails as $detail) {
            DB::table('product_details')->insert($detail);
        }
        }
    }
    

