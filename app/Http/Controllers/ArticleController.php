<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function article(){
        return view('author.article.index');
    }

    function add_article(Request $request){

        $article = new Article();

        $article->article_number = "Article". uniqid();
        $article->article_shop_id = $request->article_shop_id;
        $article->article_user_id = $request->article_user_id;
        $article->article_page_title = $request->article_page_title;
        $article->article_page_sub_title = $request->article_page_sub_title;
        $article->article = $request->article;
        // $article->article_video_link = $request->article_video_link;
        $article->save();
        // return redirect()->route()
        return back();

    }

    function edit_article($article_number){
        $articles = Article::where('article_number', $article_number)->get();
        return view('author.article.edit', compact('articles'))
    }

    function edit_article_post(Request $request, $id){

        $article = Article::find($id);

        $article->article_number = "Article". uniqid();
        $article->article_shop_id = $request->article_shop_id;
        $article->article_user_id = $request->article_user_id;
        $article->article_page_title = $request->article_page_title;
        $article->article_page_sub_title = $request->article_page_sub_title;
        $article->article = $request->article;
        // $article->article_video_link = $request->article_video_link;
        $article->save();
        // return redirect()->route()
        return back();

    }

    function article_delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }


}
