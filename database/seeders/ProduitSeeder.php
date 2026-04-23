<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        Produit::create([
            'nom' => 'Clavier',
            'description' => 'Clavier filaire',
            'prix' => 150.00,
            'stock' => 10,
            'actif' => true,
        ]);

        Produit::create([
            'nom' => 'Souris',
            'description' => 'Souris optique',
            'prix' => 80.00,
            'stock' => 15,
            'actif' => true,
        ]);

        Produit::create([
            'nom' => 'Ecran',
            'description' => 'Ecran 24 pouces',
            'prix' => 1200.00,
            'stock' => 5,
            'actif' => true,
        ]);

        Produit::create([
            'nom' => 'Imprimante',
            'description' => 'Imprimante couleur',
            'prix' => 950.00,
            'stock' => 3,
            'actif' => true,
        ]);

        Produit::create([
            'nom' => 'Casque',
            'description' => 'Casque audio',
            'prix' => 300.00,
            'stock' => 8,
            'actif' => true,
        ]);
    }
}