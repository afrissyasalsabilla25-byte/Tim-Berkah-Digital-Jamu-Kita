<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Kunyit Asam Sriwedari',
                'price' => 28000,
                'image' => 'images/kunyit-asam.jpg',
                'is_available' => true,
                'description' => 'Kunyit biang segar berpadu asam Jawa matang dan gula aren kelapa organik.',
            ],
            [
                'name' => 'Beras Kencur Pandan Wangi',
                'price' => 32000,
                'image' => 'images/beras-kencur.jpg',
                'is_available' => true,
                'description' => 'Kencur wangi sangrai, beras pandan wangi halus, cengkeh, dan madu kaliandra.',
            ],
            [
                'name' => 'Temulawak Jahe Merah',
                'price' => 35000,
                'image' => 'images/temulawak-jahe.jpg',
                'is_available' => true,
                'description' => 'Rimpang temulawak berpadu jahe merah pedas dan serai wangi.',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['name' => $product['name']], $product);
        }
    }
}