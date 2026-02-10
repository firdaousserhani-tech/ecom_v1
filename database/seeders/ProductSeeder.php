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
                'name' => 'Sérum Éclat Vitaminé',
                'description' => 'Sérum visage concentré en vitamine C pour un teint lumineux et uniforme.',
                'price' => 320.00,
                'stock' => 80,
                // Images en ligne pour que ça fonctionne sans fichiers locaux
                'image' => 'https://via.placeholder.com/600x800.png?text=Serum+Eclat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Huile d’Argan Pure',
                'description' => 'Huile d’argan 100% pure du Maroc pour nourrir le visage, les cheveux et le corps.',
                'price' => 260.00,
                'stock' => 60,
                'image' => 'https://via.placeholder.com/600x800.png?text=Huile+d%27Argan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baume Lèvres Rose',
                'description' => 'Baume réparateur enrichi en beurre de karité pour des lèvres douces et hydratées.',
                'price' => 90.00,
                'stock' => 120,
                'image' => 'https://via.placeholder.com/600x800.png?text=Baume+Levres+Rose',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crème Hydratante Jour',
                'description' => 'Crème légère à base d’aloé vera et d’acide hyaluronique pour une hydratation 24h.',
                'price' => 210.00,
                'stock' => 75,
                'image' => 'https://via.placeholder.com/600x800.png?text=Creme+Hydratante+Jour',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brume Corporelle Fleur d’Oranger',
                'description' => 'Brume parfumée délicate pour le corps, aux notes de fleur d’oranger.',
                'price' => 150.00,
                'stock' => 50,
                'image' => 'https://via.placeholder.com/600x800.png?text=Brume+Fleur+d%27Oranger',
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