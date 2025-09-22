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
        'nama' => 'Pisang',
        'harga' => 20000,
        'stok' => 120,
        'deskripsi' => 'Pisang lokal dengan kualitas terbaik dari petani terpilih. Rasanya manis dan cocok untuk berbagai olahan makanan sehat.',
        'image' => 'pisang1.jpg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Naga Merah',
        'harga' => 30000,
        'stok' => 50,
        'deskripsi' => 'Buah naga merah segar impor yang kaya akan vitamin C. Tekstur dagingnya lembut dan menyegarkan saat dikonsumsi dingin.',
        'image' => 'pink.naga.jpg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Naga Putih',
        'harga' => 28000,
        'stok' => 60,
        'deskripsi' => 'Buah naga putih segar impor dengan rasa manis alami. Cocok untuk dicampur dalam smoothie atau disantap langsung.',
        'image' => 'white.naga.jpg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Pisang',
        'harga' => 20000,
        'stok' => 120,
        'deskripsi' => 'Pisang lokal dengan kualitas terbaik dari petani terpilih. Rasanya manis dan cocok untuk berbagai olahan makanan sehat.',
        'image' => 'pisang2.jpg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Apel Fuji',
        'harga' => 25000,
        'stok' => 100,
        'deskripsi' => 'Apel Fuji segar impor dari Jepang dengan rasa manis dan renyah. Buah ini sangat baik untuk menjaga kesehatan jantung dan pencernaan.',
        'image' => 'apel1.jpg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Pisang',
        'harga' => 20000,
        'stok' => 120,
        'deskripsi' => 'Pisang lokal dengan kualitas terbaik dari petani terpilih. Rasanya manis dan cocok untuk berbagai olahan makanan sehat.',
        'image' => 'pisang3.jpg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Apel',
        'harga' => 25000,
        'stok' => 100,
        'deskripsi' => 'Apel segar impor dengan tekstur renyah dan rasa manis segar. Cocok untuk camilan sehat atau jus alami.',
        'image' => 'apel2.jpg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Kiwi',
        'harga' => 35000,
        'stok' => 70,
        'deskripsi' => 'Kiwi segar impor yang kaya akan vitamin C dan serat. Buah ini sangat baik untuk meningkatkan sistem imun tubuh.',
        'image' => 'kiwi1.jpg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Spinach',
        'harga' => 5000,
        'stok' => 150,
        'deskripsi' => 'Sayur import segar yang kaya akan zat besi dan vitamin A. Cocok untuk campuran salad atau sup sehat.',
        'image' => 'spinach1.jpg',
        'category_id' => 6, // Sayuran Import
    ],
    [
        'nama' => 'Kangkung',
        'harga' => 4000,
        'stok' => 200,
        'deskripsi' => 'Kangkung segar dari petani lokal dengan rasa khas yang lezat. Sangat cocok untuk tumisan atau sayur bening bergizi.',
        'image' => 'kangkung1.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Wortel',
        'harga' => 10000,
        'stok' => 130,
        'deskripsi' => 'Wortel segar lokal dari Brastagi yang kaya akan vitamin A. Cocok untuk jus atau sayuran rebus yang sehat.',
        'image' => 'wortel.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Brokoli',
        'harga' => 12000,
        'stok' => 70,
        'deskripsi' => 'Brokoli segar hijau yang kaya akan antioksidan dan serat. Ideal untuk ditumis atau dimakan sebagai sayuran kukus.',
        'image' => 'brocoli1.jpeg',
        'category_id' => 6, // Sayuran Import
    ],
    [
        'nama' => 'Tomato',
        'harga' => 8000,
        'stok' => 140,
        'deskripsi' => 'Tomat segar lokal yang kaya akan likopen dan vitamin C. Cocok untuk salad, saus, atau sup segar.',
        'image' => 'tomattt.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Cabai',
        'harga' => 15000,
        'stok' => 90,
        'deskripsi' => 'Cabai segar lokal dengan rasa pedas yang khas. Sempurna untuk bumbu masakan atau sambal tradisional.',
        'image' => 'cabe1.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Paprika',
        'harga' => 20000,
        'stok' => 80,
        'deskripsi' => 'Paprika segar impor dengan warna cerah dan rasa manis. Cocok untuk hiasan makanan atau tumisan sehat.',
        'image' => 'paprika.jpeg',
        'category_id' => 6, // Sayuran Import
    ],
    [
        'nama' => 'Toge',
        'harga' => 3000,
        'stok' => 200,
        'deskripsi' => 'Toge segar lokal yang kaya akan protein nabati. Ideal untuk campuran pecel atau tumisan sederhana.',
        'image' => 'toge.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Rambutan',
        'harga' => 15000,
        'stok' => 100,
        'deskripsi' => 'Rambutan segar lokal dengan rasa manis dan segar. Buah ini sangat nikmat disantap langsung atau dibuat manisan.',
        'image' => 'rambutan.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Mango',
        'harga' => 20000,
        'stok' => 90,
        'deskripsi' => 'Mangga segar lokal dengan rasa manis dan harum alami. Cocok untuk jus atau dimakan langsung sebagai camilan.',
        'image' => 'mangga.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Jeruk',
        'harga' => 18000,
        'stok' => 60,
        'deskripsi' => 'Jeruk segar lokal yang kaya akan vitamin C. Sempurna untuk jus segar atau dimakan langsung.',
        'image' => 'jeruk.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Salak',
        'harga' => 12000,
        'stok' => 110,
        'deskripsi' => 'Salak segar lokal dengan rasa manis dan sedikit asam. Cocok untuk camilan sehat atau campuran rujak.',
        'image' => 'salak.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Manggis',
        'harga' => 25000,
        'stok' => 70,
        'deskripsi' => 'Manggis segar lokal yang kaya akan antioksidan. Buah ini sangat baik untuk kesehatan kulit dan pencernaan.',
        'image' => 'maggis.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Durian',
        'harga' => 50000,
        'stok' => 40,
        'deskripsi' => 'Durian segar lokal dengan aroma khas dan rasa creamy. Cocok untuk dinikmati langsung atau diolah menjadi es krim.',
        'image' => 'durian.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Belimbing',
        'harga' => 15000,
        'stok' => 80,
        'deskripsi' => 'Belimbing segar lokal dengan rasa asam manis yang menyegarkan. Sempurna untuk campuran salad buah atau rujak.',
        'image' => 'belimbing1.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Anggur Hijau',
        'harga' => 45000,
        'stok' => 90,
        'deskripsi' => 'Anggur hijau impor segar yang manis dan renyah. Cocok untuk camilan sehat atau diolah menjadi wine.',
        'image' => 'anggur.hijau.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Semangka',
        'harga' => 20000,
        'stok' => 100,
        'deskripsi' => 'Semangka segar lokal yang menyegarkan dan kaya akan air. Ideal untuk hidrasi alami atau campuran jus.',
        'image' => 'semangka1.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Alpukat',
        'harga' => 30000,
        'stok' => 60,
        'deskripsi' => 'Alpukat segar impor yang kaya akan lemak sehat. Cocok untuk jus atau dihaluskan sebagai spread roti.',
        'image' => 'alpukat1.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Anggur Ungu',
        'harga' => 45000,
        'stok' => 90,
        'deskripsi' => 'Anggur ungu impor segar dengan rasa manis pekat. Sempurna untuk camilan atau diolah menjadi selai alami.',
        'image' => 'anggur.ungu.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Nanas',
        'harga' => 15000,
        'stok' => 100,
        'deskripsi' => 'Nanas segar lokal dengan rasa manis dan asam seimbang. Cocok untuk campuran salad buah atau diolah menjadi manisan.',
        'image' => 'nanas.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Strawberry',
        'harga' => 40000,
        'stok' => 50,
        'deskripsi' => 'Strawberry segar impor dengan rasa manis dan sedikit asam. Ideal untuk dessert atau campuran yogurt sehat.',
        'image' => 'strawberry1.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Pepaya',
        'harga' => 10000,
        'stok' => 120,
        'deskripsi' => 'Pepaya segar lokal yang kaya akan enzim papain. Cocok untuk jus atau dimakan langsung untuk kesehatan pencernaan.',
        'image' => 'pepaya.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Pir',
        'harga' => 25000,
        'stok' => 80,
        'deskripsi' => 'Pir segar impor dengan tekstur lembut dan rasa manis. Sempurna untuk camilan sehat atau campuran salad buah.',
        'image' => 'pir.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Jambu',
        'harga' => 12000,
        'stok' => 110,
        'deskripsi' => 'Jambu segar lokal dengan rasa manis dan segar. Cocok untuk dimakan langsung atau diolah menjadi jus alami.',
        'image' => 'jambu.jpeg',
        'category_id' => 3, // Buah Lokal
    ],
    [
        'nama' => 'Peach',
        'harga' => 35000,
        'stok' => 70,
        'deskripsi' => 'Peach segar impor dengan rasa manis dan tekstur lembut. Ideal untuk dessert atau dimakan sebagai camilan sehat.',
        'image' => 'peach.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Lemon',
        'harga' => 20000,
        'stok' => 90,
        'deskripsi' => 'Lemon segar impor yang kaya akan vitamin C. Cocok untuk minuman segar atau sebagai penyedap masakan.',
        'image' => 'lemon.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Cherry',
        'harga' => 50000,
        'stok' => 40,
        'deskripsi' => 'Cherry segar impor dengan rasa manis dan sedikit asam. Sempurna untuk camilan atau hiasan kue.',
        'image' => 'chery.jpeg',
        'category_id' => 4, // Buah Impor
    ],
    [
        'nama' => 'Kentang',
        'harga' => 8000,
        'stok' => 150,
        'deskripsi' => 'Kentang segar lokal yang kaya akan karbohidrat. Cocok untuk gorengan atau sayuran rebus bergizi.',
        'image' => 'kentang.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Kolplay',
        'harga' => 5000,
        'stok' => 180,
        'deskripsi' => 'Kolplay segar lokal dengan rasa segar dan renyah. Ideal untuk tumisan atau campuran sayur bening.',
        'image' => 'sawi.hijau.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Kacang Panjang',
        'harga' => 6000,
        'stok' => 160,
        'deskripsi' => 'Kacang panjang segar lokal yang kaya akan serat. Cocok untuk tumisan atau sayuran rebus sehat.',
        'image' => 'kacang.pjg.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Timun',
        'harga' => 4000,
        'stok' => 200,
        'deskripsi' => 'Timun segar lokal yang menyegarkan dan rendah kalori. Sempurna untuk salad atau rujak segar.',
        'image' => 'timun.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Seledri',
        'harga' => 7000,
        'stok' => 140,
        'deskripsi' => 'Seledri segar lokal yang kaya akan vitamin K. Cocok untuk campuran sup atau jus detoks.',
        'image' => 'sledri.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],
    [
        'nama' => 'Terong',
        'harga' => 9000,
        'stok' => 130,
        'deskripsi' => 'Terong segar lokal dengan tekstur lembut saat dimasak. Ideal untuk tumisan atau olahan balado.',
        'image' => 'terong.jpeg',
        'category_id' => 5, // Sayuran Lokal
    ],

];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
