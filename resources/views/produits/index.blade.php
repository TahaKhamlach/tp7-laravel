<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>

    @foreach($produits as $produit)
        <div style="margin-bottom:20px; border:1px solid black; padding:10px;">
            <h2>{{ $produit->nom }}</h2>
            <p>Description : {{ $produit->description }}</p>
            <p>Prix : {{ $produit->prix }}</p>
            <p>Stock : {{ $produit->stock }}</p>
            <p>Actif : {{ $produit->actif ? 'Oui' : 'Non' }}</p>
            <p>Catégorie : {{ $produit->categorie ? $produit->categorie->nom : 'Aucune catégorie' }}</p>
            <a href="{{ route('produits.show', $produit) }}">Voir détail</a>
        </div>
    @endforeach
</body>
</html>