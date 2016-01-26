<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    function index()
    {
        $data['articles'] = Article::all();

        return view('articles.index',$data);
    }

    function show($id)
    {
        $data['article'] = Article::findOrFail($id);

        return view('articles.show',$data);
    }
}
