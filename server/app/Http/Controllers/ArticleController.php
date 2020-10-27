<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show',['article' => $article]);
    }
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }
    // フォームで送られたデータ、渡されたidをうけとる
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        $article->save();

        return redirect('/articles');

    }
    public function index()
    {
        $articles = Article::all();
        return view('article.index',['articles' => $articles]);
    }
    public function create()
    {
        return view('article.create');
    }
    public function store(Request $request)
    // 送られてきたデータを受け取る、createからくる
    {
        $article = new Article;
        
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        $article->save();
        // インスタンスに値を設置して保存する
        return redirect('/articles');

    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
