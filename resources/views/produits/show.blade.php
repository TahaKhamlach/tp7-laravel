@extends('layouts.app')

@section('title', 'Détail du produit')

@section('content')
    <h1>Détail du produit</h1>

    <p><strong>Nom :</strong> {{ $produit['nom'] }}</p>
    <p><strong>Prix :</strong> {{ $produit['prix'] }} DH</p>
    <p><strong>Description :</strong> {{ $produit['description'] }}</p>

    <a href="{{ route('produits.index') }}">Retour à la liste</a>
@endsection