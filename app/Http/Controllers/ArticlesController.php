<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->published()->get();
        return view('index', compact('articles'));
    }

    public function about()
    {
        return view('about.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create(Article $article)
    {
        return view('articles.create', compact('article'));
    }

    public function store(ArticleRequest $articleRequest)
    {
        $validated = $articleRequest->validated();
        $validated['created_at'] = (request()->get('published') === 'on' ? time() : null);

        Article::create($validated);
        return redirect(route('articles.index'))->with('status', 'Article saved!');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $articleRequest)
    {
        $validated = $articleRequest->validated();
        $validated['created_at'] = (request()->get('published') === 'on' ? time() : null);

        $article->update($validated);
        return redirect(route('articles.index'))->with('status', 'Article changed!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'))->with('status', 'Article deleted!');
    }
}
