<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * get all articles by passing the article type id.
     * 
     *  @return App\Article
     */
    public static function getArticlesByType(int $id)
    {
        return DB::table('articles')
            ->join('article_types', 'article_types.id', '=', 'articles.article_type_id')
            ->select()
            ->Where('is_deleted', '=', 0)
            ->Where('article_types.id', '=', $id)
            ->orderBy('articles.created_at', 'DESC')
            ->get();
    }

    
    /**
     * get all articles by passing the article type id.
     * 
     *  @return App\Article
     */
    public static function getArticleById(int $id)
    {
        return DB::table('articles')
            ->select()
            ->Where('is_deleted', '=', 0)
            ->Where('id', '=', $id)
            ->get()->ToArray();
    }

    /**
     * Get all articles.
     * 
     * @return App\Article
     */
    public static function getAllArticles()
    {
        return DB::table('articles')
            ->join('article_types', 'article_types.id', '=', 'articles.article_type_id')
            ->select('articles.id as a_id', 'article_types.id as at_id', 'articles.created_at', 'article_name', 'article_types.name', 'price','articles.is_active','articles.is_deleted')
            ->Where('is_deleted', '=', 0)
            ->orderBy('articles.created_at', 'DESC')
            ->get();
    }
    public static function updateArticle($id,$data)
    {
        return DB::table('articles')
                ->where('id', $id)
                ->update($data);
    }
    /**
     * Delete an articles.
     * 
     * @return App\Article
     */
    public static function deleteArticle($id)
    {
        return DB::table('articles')
            ->where('id', $id)
            ->update(['is_deleted' => 1]);
    }

     /**
     * Activate and In activate an article.
     * 
     * @return App\Article
     */
    public static function activationArticle($id,$status)
    {
        return DB::table('articles')
            ->where('id', $id)
            ->update(['is_active' => $status]);
    }

    /**
     * Add an article
     */
    public static function adddArticle($data)
    {
        return DB::table('articles')->insert($data);
    }
}
