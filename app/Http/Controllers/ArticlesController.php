<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
  
    /**
     * Get all articles by passing the article type
     * 
     * @return \Illuminate\Http\Response
     */
    public function getArticles(int $id = 0) {
        if($id)
            $res = Article::getArticlesByType($id);
        else
            $res = Article::getAllArticles();
        echo json_encode($res);
    }
    
}
