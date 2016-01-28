<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        $data['articles'] = Article::latest('published_at')->published()->get();
        return view('articles.index',$data);
    }

    public function show($id)
    {
        $data['article'] = Article::findOrFail($id);
        return view('articles.show',$data);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        return redirect('articles');
    }

    public function edit($id)
    {
        $data['article'] = Article::findOrFail($id);
        return view('articles.edit',$data);
    }

    public function update($id,ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

}
