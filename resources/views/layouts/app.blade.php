<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Accueil</a> |
        <a href="{{ route('produits.index') }}">Produits</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <footer>
        &copy; {{ date('Y') }}
    </footer>
</body>
</html>