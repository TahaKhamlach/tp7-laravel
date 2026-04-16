@extends('layouts.app')

@section('title', 'Liste des produits')

@section('content')
    <h1>Liste des produits</h1>

    <ul>
        @foreach($produits as $produit)
            <li>
                {{ $produit['nom'] }} - {{ $produit['prix'] }} DH
                <a href="{{ route('produits.show', $produit['id']) }}">Voir détail</a>
            </li>
        @endforeach
    </ul>
@endsection