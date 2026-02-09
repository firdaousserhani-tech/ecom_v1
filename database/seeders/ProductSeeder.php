<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'T-shirt Bleu',
                'description' => 'T-shirt en coton confortable',
                'price' => 150.00,
                'stock' => 50,
                'image' => 'images/tshirt_bleu.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chaussures Sport',
                'description' => 'Chaussures légères pour le sport',
                'price' => 500.00,
                'stock' => 30,
                'image' => 'images/chaussures_sport.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['name' => $product['name']], // Unique identifier
                $product
            );
        }
    }
}