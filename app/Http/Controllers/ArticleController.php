<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        /**
         * @var $articleList Collection
         */
        $articleList = Article::latest()->limit(10)->get();

        return $articleList;
    }


    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        /**
         * @var $article Article
         */
        $article = Article::create([
            'title' => $request['title'],
            'body' => $request['body'],
            'preview' => mb_strimwidth($request['body'], 0, 150, ''),
            'user_id' => $request->user()->id,
        ]);


        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
