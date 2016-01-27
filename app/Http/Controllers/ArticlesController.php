<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index()
    {
        $data['articles'] = Article::latest('published_at')->get();
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

    public function store(Request $request)
    {
        $input = $request->all();
        $input['published_at'] =Carbon::now();
        Article::create($input);

        return redirect('articles');
    }

}
