<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = [
            1 => [
                'id' => 1,
                'nom' => 'Ordinateur portable',
                'prix' => 7500,
                'description' => 'Un ordinateur portable performant'
            ],
            2 => [
                'id' => 2,
                'nom' => 'Souris',
                'prix' => 150,
                'description' => 'Une souris sans fil'
            ],
            3 => [
                'id' => 3,
                'nom' => 'Clavier',
                'prix' => 300,
                'description' => 'Un clavier mécanique'
            ]
        ];

        return view('produits.index', compact('produits'));
    }

    public function show(int $id)
    {
        $produits = [
            1 => [
                'id' => 1,
                'nom' => 'Ordinateur portable',
                'prix' => 7500,
                'description' => 'Un ordinateur portable performant'
            ],
            2 => [
                'id' => 2,
                'nom' => 'Souris',
                'prix' => 150,
                'description' => 'Une souris sans fil'
            ],
            3 => [
                'id' => 3,
                'nom' => 'Clavier',
                'prix' => 300,
                'description' => 'Un clavier mécanique'
            ]
        ];

        $produit = $produits[$id];

        return view('produits.show', compact('produit'));
    }
}