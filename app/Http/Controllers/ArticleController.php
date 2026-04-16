<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            1 => [
                'id' => 1,
                'titre' => 'Article 1',
                'contenu' => 'Contenu de l\'article 1'
            ],
            2 => [
                'id' => 2,
                'titre' => 'Article 2',
                'contenu' => 'Contenu de l\'article 2'
            ],
            3 => [
                'id' => 3,
                'titre' => 'Article 3',
                'contenu' => 'Contenu de l\'article 3'
            ]
        ];

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $articles = [
            1 => [
                'id' => 1,
                'titre' => 'Article 1',
                'contenu' => 'Contenu de l\'article 1'
            ],
            2 => [
                'id' => 2,
                'titre' => 'Article 2',
                'contenu' => 'Contenu de l\'article 2'
            ],
            3 => [
                'id' => 3,
                'titre' => 'Article 3',
                'contenu' => 'Contenu de l\'article 3'
            ]
        ];

        $article = $articles[$id];

        return view('articles.show', compact('article'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}