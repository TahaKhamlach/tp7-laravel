<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Produit;

class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        $c1 = Categorie::create(['nom' => 'Informatique']);
        $c2 = Categorie::create(['nom' => 'Bureautique']);
        $c3 = Categorie::create(['nom' => 'Audio']);

        Produit::find(1)?->update(['categorie_id' => $c1->id]);
        Produit::find(2)?->update(['categorie_id' => $c1->id]);
        Produit::find(3)?->update(['categorie_id' => $c2->id]);
        Produit::find(4)?->update(['categorie_id' => $c2->id]);
        Produit::find(5)?->update(['categorie_id' => $c3->id]);
    }
}