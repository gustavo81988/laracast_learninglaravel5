<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
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
        dd($data['article']->published_at);
        return view('articles.show',$data);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        Article::create($request->all());
        return redirect('articles');
    }

}
