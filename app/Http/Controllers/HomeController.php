<?php

namespace App\Http\Controllers;

use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact(
            'articles'
        ));
    }

    public function create()
    {
        return view('article.form');
    }

    public function store()
    {
        $article = new Article();

        $article->fill(\Input::only([
            'title',
            'content'
        ]));

        $article->save();

        return redirect('/');
    }
}