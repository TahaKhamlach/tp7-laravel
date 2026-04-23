<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail du produit</title>
</head>
<body>
    <h1>Détail du produit</h1>

    <p><strong>Nom :</strong> {{ $produit->nom }}</p>
    <p><strong>Description :</strong> {{ $produit->description }}</p>
    <p><strong>Prix :</strong> {{ $produit->prix }}</p>
    <p><strong>Stock :</strong> {{ $produit->stock }}</p>
    <p><strong>Actif :</strong> {{ $produit->actif ? 'Oui' : 'Non' }}</p>
    <p><strong>Catégorie :</strong> {{ $produit->categorie ? $produit->categorie->nom : 'Aucune catégorie' }}</p>

    <a href="{{ route('produits.index') }}">Retour</a>
</body>
</html>