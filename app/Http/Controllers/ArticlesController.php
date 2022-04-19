<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');

    }

    public function index(){
        $articles = Article::with('user')->orderBy('id','desc')->get();
        return view('articles/index',['articles' => $articles]);
    }

    public function show($article_id){
        $article = Article::find($article_id);
        return view('articles.show',['article'=>$article]);

    }

    public function  create(){
        return view('articles/create');
    }

    public function store(Request $request){
        $content = $request->validate([
            'title' => 'required',
            'content' => 'required|min:10'
        ]);

        auth()->user()->articles()->create($content);
        return redirect()->route('root')->with('notice','article add success!');
    }

    public function edit($article_id){
        $article = auth()->user()->articles->find($article_id);
        return view('articles.edit',['article'=>$article]);
    }

    public function update(Request $request, $article_id){
        $article = auth()->user()->articles->find($article_id);

        $content = $request->validate([
            'title' => 'required',
            'content' => 'required|min:10'
        ]);

        $article -> update($content);
        return redirect()->route('root')->with('notice','Article update success!');
    }

    public function destroy($article_id){
        $article = auth()->user()->articles->find($article_id);
        $article->delete();
        return redirect()->route('root')->with('notice','Article delete success!');
    }

}
