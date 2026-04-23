<?php

namespace App\Http\Controllers;

use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::where('actif', true)
            ->orderBy('nom')
            ->get();

        return view('produits.index', compact('produits'));
    }

    public function show(Produit $produit)
    {
        return view('produits.show', compact('produit'));
    }
}