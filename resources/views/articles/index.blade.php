@extends('layouts.app')

@section('title', 'Liste des articles')

@section('content')
    <h1>Liste des articles</h1>

    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article['id']) }}">
                    {{ $article['titre'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection