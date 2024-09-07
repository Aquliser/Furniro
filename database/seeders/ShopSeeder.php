<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::create([
            'name' => 'Product 1',
            'description' => 'Description of product 1.',
            'image' => 'path/to/image1.jpg',
            'price' => 100.00,
        ]);

        Shop::create([
            'name' => 'Product 2',
            'description' => 'Description of product 2.',
            'image' => 'path/to/image2.jpg',
            'price' => 200.00,
        ]);

        Shop::create([
            'name' => 'Product 3',
            'description' => 'Description of product 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 150.00,
        ]);

        Shop::create([
            'name' => 'Product 4',
            'description' => 'Description of product 4.',
            'image' => 'path/to/image4.jpg',
            'price' => 250.00,
        ]);

        Shop::create([
            'name' => 'Product 5',
            'description' => 'Description of product 5.',
            'image' => 'path/to/image5.jpg',
            'price' => 300.00,
        ]);

        // Add as many products as needed
    }
}