<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleType;

class AdminController extends Controller
{
    /**
     * Display a listing of all articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::getAllArticles();
        return view('backend.dashboard', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articleTypes = ArticleType::getArticleTypes();
        return view('backend.addarticles', compact('articleTypes'));
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'article_name' => $request->input('articleName'),
            'article_type_id' => $request->input('articleType'),
            'price' => $request->input('price'),
        ];
        Article::adddArticle($data);
        return redirect()->back();

    }

     /**
     * Edit an article of specific ID.
     *
     */
    public function edit($id)
    {
        $article = Article::getArticleById($id);
        $articleTypes = ArticleType::getArticleTypes();

        return view('backend.editarticle', compact('article','articleTypes'));
    }

    /**
     * Store a newly created article in storage.
     *
     */
    public function update(Request $request)
    {
        $data = [
            'article_name' => $request->input('articleName'),
            'article_type_id' => $request->input('articleType'),
            'price' => $request->input('price'),
        ];
        $id = $request->input('id');
        Article::updateArticle($id,$data);

        return redirect()->back();
    }

     /**
      * To in active and active the article
      */
    public function activation($id,$status)
    {
        Article::activationArticle($id,$status);
        return redirect()->back();
    }

    /**
     * To delete an article
    */
    public function delete($id)
    {
        Article::deleteArticle($id);
        return redirect()->back();
    }
}
