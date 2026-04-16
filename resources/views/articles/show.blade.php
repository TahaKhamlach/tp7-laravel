@extends('layouts.app')

@section('title', 'Détail de l\'article')

@section('content')
    <h1>{{ $article['titre'] }}</h1>

    <p><strong>Contenu :</strong> {{ $article['contenu'] }}</p>

    <a href="{{ route('articles.index') }}">Retour à la liste</a>
@endsection